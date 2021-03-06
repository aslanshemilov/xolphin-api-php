<?php

namespace Xolphin\Requests;

class RenewRequest
{
    /** @var int */
    private $productId;

    /** @var int */
    private $years;

    /** @var string */
    private $csr;

    /** @var string $dcvType use one of the following: EMAIL_VALIDATION, FILE_VALIDATION, DNS_VALIDATION */
    private $dcvType;

    /** @var string[] */
    private $subjectAlternativeNames = [];

    /** @var DCVDomain[] */
    private $dcv = [];

    /** @var string */
    private $company;

    /** @var string */
    private $department;

    /** @var string */
    private $address;

    /** @var string */
    private $zipcode;

    /** @var string */
    private $city;

    /** @var string */
    private $approverFirstName;

    /** @var string */
    private $approverLastName;

    /** @var string */
    private $approverEmail;

    /** @var string */
    private $approverPhone;

    /** @var string */
    private $kvk;

    /** @var string */
    private $reference;

    /** @var string */
    private $uniqueValueDcv = null;

    /**
     * Renew constructor.
     * @param int $productId
     * @param int $years
     * @param string $csr
     * @param string $dcvType use one of the following: EMAIL_VALIDATION, FILE_VALIDATION, DNS_VALIDATION
     */
    public function __construct(int $productId, int $years, string $csr, string $dcvType)
    {
        $this->productId = $productId;
        $this->years = $years;
        $this->csr = $csr;
        $this->dcvType = $dcvType;
    }

    /**
     * @return array
     */
    public function getApiRequestBody(): array
    {
        $result = [];
        $result['product'] = $this->productId;
        $result['years'] = $this->years;
        $result['csr'] = $this->csr;
        $result['dcvType'] = $this->dcvType;
        if (!empty($this->subjectAlternativeNames)) {
            $result['subjectAlternativeNames'] = implode(',', $this->subjectAlternativeNames);
        }
        if (!empty($this->dcv)) {
            $result['dcv'] = json_encode($this->dcv);
        }
        if (!empty($this->company)) {
            $result['company'] = $this->company;
        }
        if (!empty($this->department)) {
            $result['department'] = $this->department;
        }
        if (!empty($this->address)) {
            $result['address'] = $this->address;
        }
        if (!empty($this->zipcode)) {
            $result['zipcode'] = $this->zipcode;
        }
        if (!empty($this->city)) {
            $result['city'] = $this->city;
        }
        if (!empty($this->approverFirstName)) {
            $result['approverFirstName'] = $this->approverFirstName;
        }
        if (!empty($this->approverLastName)) {
            $result['approverLastName'] = $this->approverLastName;
        }
        if (!empty($this->approverEmail)) {
            $result['approverEmail'] = $this->approverEmail;
        }
        if (!empty($this->approverPhone)) {
            $result['approverPhone'] = $this->approverPhone;
        }
        if (!empty($this->kvk)) {
            $result['kvk'] = $this->kvk;
        }
        if (!empty($this->reference)) {
            $result['reference'] = $this->reference;
        }
        if (!is_null($this->uniqueValueDcv)) {
            $result['uniqueValueDcv'] = $this->uniqueValueDcv;
        }
        return $result;
    }

    /**
     * @return string[]
     */
    public function getSubjectAlternativeNames(): array
    {
        return $this->subjectAlternativeNames;
    }

    /**
     * @param string $subjectAlternativeNames
     * @return RenewRequest
     */
    public function addSubjectAlternativeNames(string $subjectAlternativeNames): RenewRequest
    {
        $this->subjectAlternativeNames[] = $subjectAlternativeNames;
        return $this;
    }

    /**
     * @return DCVDomain[]
     */
    public function getDcv(): array
    {
        return $this->dcv;
    }

    /**
     * @param DCVDomain $dcv
     * @return RenewRequest
     */
    public function addDcv(DCVDomain $dcv): RenewRequest
    {
        $this->dcv[] = $dcv;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompany(): string
    {
        return $this->company;
    }

    /**
     * @param string $company
     * @return RenewRequest
     */
    public function setCompany(string $company): RenewRequest
    {
        $this->company = $company;
        return $this;
    }

    /**
     * @return string
     */
    public function getDepartment(): string
    {
        return $this->department;
    }

    /**
     * @param string $department
     * @return RenewRequest
     */
    public function setDepartment(string $department): RenewRequest
    {
        $this->department = $department;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param string $address
     * @return RenewRequest
     */
    public function setAddress(string $address): RenewRequest
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return string
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }

    /**
     * @param string $zipcode
     * @return RenewRequest
     */
    public function setZipcode(string $zipcode): RenewRequest
    {
        $this->zipcode = $zipcode;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     * @return RenewRequest
     */
    public function setCity(string $city): RenewRequest
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return string
     */
    public function getApproverFirstName()
    {
        return $this->approverFirstName;
    }

    /**
     * @param string $approverFirstName
     * @return RenewRequest
     */
    public function setApproverFirstName(string $approverFirstName): RenewRequest
    {
        $this->approverFirstName = $approverFirstName;
        return $this;
    }

    /**
     * @return string
     */
    public function getApproverLastName()
    {
        return $this->approverLastName;
    }

    /**
     * @param string $approverLastName
     * @return RenewRequest
     */
    public function setApproverLastName(string $approverLastName): RenewRequest
    {
        $this->approverLastName = $approverLastName;
        return $this;
    }

    /**
     * @return string
     */
    public function getApproverEmail()
    {
        return $this->approverEmail;
    }

    /**
     * @param string $approverEmail
     * @return RenewRequest
     */
    public function setApproverEmail(string $approverEmail): RenewRequest
    {
        $this->approverEmail = $approverEmail;
        return $this;
    }

    /**
     * @return string
     */
    public function getApproverPhone()
    {
        return $this->approverPhone;
    }

    /**
     * @param string $approverPhone
     * @return RenewRequest
     */
    public function setApproverPhone(string $approverPhone): RenewRequest
    {
        $this->approverPhone = $approverPhone;
        return $this;
    }

    /**
     * @return string
     */
    public function getKvk()
    {
        return $this->kvk;
    }

    /**
     * @param string $kvk
     * @return RenewRequest
     */
    public function setKvk(string $kvk): RenewRequest
    {
        $this->kvk = $kvk;
        return $this;
    }

    /**
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @param string $reference
     * @return RenewRequest
     */
    public function setReference(string $reference): RenewRequest
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * @return string
     */
    public function getUniqueValueDcv()
    {
        return $this->uniqueValueDcv;
    }

    /**
     * @param string $uniqueValue
     * @return RenewRequest
     */
    public function setUniqueValueDcv(string $uniqueValue): RenewRequest
    {
        $this->uniqueValueDcv = $uniqueValue;
        return $this;
    }
}
