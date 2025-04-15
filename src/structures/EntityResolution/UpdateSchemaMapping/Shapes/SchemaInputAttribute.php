<?php

namespace Sunaoka\Aws\Structures\EntityResolution\UpdateSchemaMapping\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $fieldName
 * @property 'NAME'|'NAME_FIRST'|'NAME_MIDDLE'|'NAME_LAST'|'ADDRESS'|'ADDRESS_STREET1'|'ADDRESS_STREET2'|'ADDRESS_STREET3'|'ADDRESS_CITY'|'ADDRESS_STATE'|'ADDRESS_COUNTRY'|'ADDRESS_POSTALCODE'|'PHONE'|'PHONE_NUMBER'|'PHONE_COUNTRYCODE'|'EMAIL_ADDRESS'|'UNIQUE_ID'|'DATE'|'STRING'|'PROVIDER_ID' $type
 * @property string|null $groupName
 * @property string|null $matchKey
 * @property string|null $subType
 * @property bool|null $hashed
 */
class SchemaInputAttribute extends Shape
{
    /**
     * @param array{
     *     fieldName: string,
     *     type: 'NAME'|'NAME_FIRST'|'NAME_MIDDLE'|'NAME_LAST'|'ADDRESS'|'ADDRESS_STREET1'|'ADDRESS_STREET2'|'ADDRESS_STREET3'|'ADDRESS_CITY'|'ADDRESS_STATE'|'ADDRESS_COUNTRY'|'ADDRESS_POSTALCODE'|'PHONE'|'PHONE_NUMBER'|'PHONE_COUNTRYCODE'|'EMAIL_ADDRESS'|'UNIQUE_ID'|'DATE'|'STRING'|'PROVIDER_ID',
     *     groupName?: string|null,
     *     matchKey?: string|null,
     *     subType?: string|null,
     *     hashed?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
