<?php
namespace Xolphin\Responses;

class ValidationCalls extends Base
{
    /**
     * @var ValidationCall
     */
    public $validationCall = [];

    /**
     * ValidationCalls constructor.
     * @param $data
     * @throws \Exception
     */
    public function __construct($data)
    {
        parent::__construct($data);

        if (!$this->isError()) {
            if($data->list) {
                foreach($data->list as $list) {
                    $this->validationCall[] = new ValidationCall($list);
                }
            }
        }
    }
}