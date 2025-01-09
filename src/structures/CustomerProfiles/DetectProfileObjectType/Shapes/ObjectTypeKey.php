<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\DetectProfileObjectType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'PROFILE'|'ASSET'|'CASE'|'ORDER'|'COMMUNICATION_RECORD'|'UNIQUE'|'SECONDARY'|'LOOKUP_ONLY'|'NEW_ONLY'> $StandardIdentifiers
 * @property list<string> $FieldNames
 */
class ObjectTypeKey extends Shape
{
    /**
     * @param array{
     *     StandardIdentifiers?: list<'PROFILE'|'ASSET'|'CASE'|'ORDER'|'COMMUNICATION_RECORD'|'UNIQUE'|'SECONDARY'|'LOOKUP_ONLY'|'NEW_ONLY'>,
     *     FieldNames?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
