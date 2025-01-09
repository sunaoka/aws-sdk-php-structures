<?php

namespace Sunaoka\Aws\Structures\EntityResolution\GetProviderService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $fieldName
 * @property bool $hashing
 * @property string $subType
 * @property 'NAME'|'NAME_FIRST'|'NAME_MIDDLE'|'NAME_LAST'|'ADDRESS'|'ADDRESS_STREET1'|'ADDRESS_STREET2'|'ADDRESS_STREET3'|'ADDRESS_CITY'|'ADDRESS_STATE'|'ADDRESS_COUNTRY'|'ADDRESS_POSTALCODE'|'PHONE'|'PHONE_NUMBER'|'PHONE_COUNTRYCODE'|'EMAIL_ADDRESS'|'UNIQUE_ID'|'DATE'|'STRING'|'PROVIDER_ID' $type
 */
class ProviderSchemaAttribute extends Shape
{
    /**
     * @param array{
     *     fieldName: string,
     *     hashing?: bool,
     *     subType?: string,
     *     type: 'NAME'|'NAME_FIRST'|'NAME_MIDDLE'|'NAME_LAST'|'ADDRESS'|'ADDRESS_STREET1'|'ADDRESS_STREET2'|'ADDRESS_STREET3'|'ADDRESS_CITY'|'ADDRESS_STATE'|'ADDRESS_COUNTRY'|'ADDRESS_POSTALCODE'|'PHONE'|'PHONE_NUMBER'|'PHONE_COUNTRYCODE'|'EMAIL_ADDRESS'|'UNIQUE_ID'|'DATE'|'STRING'|'PROVIDER_ID'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
