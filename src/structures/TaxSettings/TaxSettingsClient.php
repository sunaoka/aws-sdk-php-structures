<?php

namespace Sunaoka\Aws\Structures\TaxSettings;

class TaxSettingsClient extends \Aws\TaxSettings\TaxSettingsClient
{
    use BatchDeleteTaxRegistration\BatchDeleteTaxRegistrationTrait;
    use BatchGetTaxExemptions\BatchGetTaxExemptionsTrait;
    use BatchPutTaxRegistration\BatchPutTaxRegistrationTrait;
    use DeleteSupplementalTaxRegistration\DeleteSupplementalTaxRegistrationTrait;
    use DeleteTaxRegistration\DeleteTaxRegistrationTrait;
    use GetTaxExemptionTypes\GetTaxExemptionTypesTrait;
    use GetTaxInheritance\GetTaxInheritanceTrait;
    use GetTaxRegistration\GetTaxRegistrationTrait;
    use GetTaxRegistrationDocument\GetTaxRegistrationDocumentTrait;
    use ListSupplementalTaxRegistrations\ListSupplementalTaxRegistrationsTrait;
    use ListTaxExemptions\ListTaxExemptionsTrait;
    use ListTaxRegistrations\ListTaxRegistrationsTrait;
    use PutSupplementalTaxRegistration\PutSupplementalTaxRegistrationTrait;
    use PutTaxExemption\PutTaxExemptionTrait;
    use PutTaxInheritance\PutTaxInheritanceTrait;
    use PutTaxRegistration\PutTaxRegistrationTrait;
}
