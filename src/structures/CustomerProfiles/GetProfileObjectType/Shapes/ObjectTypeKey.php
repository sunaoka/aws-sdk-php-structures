<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetProfileObjectType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'PROFILE'|'ASSET'|'CASE'|'ORDER'|'COMMUNICATION_RECORD'|'UNIQUE'|'SECONDARY'|'LOOKUP_ONLY'|'NEW_ONLY'>|null $StandardIdentifiers
 * @property list<string>|null $FieldNames
 */
class ObjectTypeKey extends Shape
{
    /**
     * @param array{
     *     StandardIdentifiers?: list<'PROFILE'|'ASSET'|'CASE'|'ORDER'|'COMMUNICATION_RECORD'|'UNIQUE'|'SECONDARY'|'LOOKUP_ONLY'|'NEW_ONLY'>|null,
     *     FieldNames?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
