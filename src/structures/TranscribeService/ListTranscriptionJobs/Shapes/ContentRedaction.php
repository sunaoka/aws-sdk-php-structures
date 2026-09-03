<?php

namespace Sunaoka\Aws\Structures\TranscribeService\ListTranscriptionJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PII' $RedactionType
 * @property 'redacted'|'redacted_and_unredacted' $RedactionOutput
 * @property list<'BANK_ACCOUNT_NUMBER'|'BANK_ROUTING'|'CREDIT_DEBIT_NUMBER'|'CREDIT_DEBIT_CVV'|'CREDIT_DEBIT_EXPIRY'|'PIN'|'EMAIL'|'ADDRESS'|'NAME'|'PHONE'|'SSN'|'DATE_TIME'|'PASSPORT_NUMBER'|'DRIVER_ID'|'URL'|'AGE'|'USERNAME'|'PASSWORD'|'AWS_ACCESS_KEY'|'AWS_SECRET_KEY'|'IP_ADDRESS'|'MAC_ADDRESS'|'LICENSE_PLATE'|'VEHICLE_IDENTIFICATION_NUMBER'|'US_INDIVIDUAL_TAX_IDENTIFICATION_NUMBER'|'CA_HEALTH_NUMBER'|'CA_SOCIAL_INSURANCE_NUMBER'|'INTERNATIONAL_BANK_ACCOUNT_NUMBER'|'SWIFT_CODE'|'ALL'>|null $PiiEntityTypes
 */
class ContentRedaction extends Shape
{
    /**
     * @param array{
     *     RedactionType: 'PII',
     *     RedactionOutput: 'redacted'|'redacted_and_unredacted',
     *     PiiEntityTypes?: list<'BANK_ACCOUNT_NUMBER'|'BANK_ROUTING'|'CREDIT_DEBIT_NUMBER'|'CREDIT_DEBIT_CVV'|'CREDIT_DEBIT_EXPIRY'|'PIN'|'EMAIL'|'ADDRESS'|'NAME'|'PHONE'|'SSN'|'DATE_TIME'|'PASSPORT_NUMBER'|'DRIVER_ID'|'URL'|'AGE'|'USERNAME'|'PASSWORD'|'AWS_ACCESS_KEY'|'AWS_SECRET_KEY'|'IP_ADDRESS'|'MAC_ADDRESS'|'LICENSE_PLATE'|'VEHICLE_IDENTIFICATION_NUMBER'|'US_INDIVIDUAL_TAX_IDENTIFICATION_NUMBER'|'CA_HEALTH_NUMBER'|'CA_SOCIAL_INSURANCE_NUMBER'|'INTERNATIONAL_BANK_ACCOUNT_NUMBER'|'SWIFT_CODE'|'ALL'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
