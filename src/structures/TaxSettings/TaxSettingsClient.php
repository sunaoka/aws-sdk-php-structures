<?php

namespace Sunaoka\Aws\Structures\TaxSettings;

class TaxSettingsClient extends \Aws\TaxSettings\TaxSettingsClient
{
    use BatchDeleteTaxRegistration\BatchDeleteTaxRegistrationTrait;
    use BatchPutTaxRegistration\BatchPutTaxRegistrationTrait;
    use DeleteTaxRegistration\DeleteTaxRegistrationTrait;
    use GetTaxRegistration\GetTaxRegistrationTrait;
    use GetTaxRegistrationDocument\GetTaxRegistrationDocumentTrait;
    use ListTaxRegistrations\ListTaxRegistrationsTrait;
    use PutTaxRegistration\PutTaxRegistrationTrait;
}
