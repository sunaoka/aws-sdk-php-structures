<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NetworkAclEntry|null $EntryDetail
 * @property int<0, 2147483647>|null $EntryRuleNumber
 * @property 'FMS_MANAGED_FIRST_ENTRY'|'FMS_MANAGED_LAST_ENTRY'|'CUSTOM_ENTRY'|null $EntryType
 */
class EntryDescription extends Shape
{
    /**
     * @param array{
     *     EntryDetail?: NetworkAclEntry|null,
     *     EntryRuleNumber?: int<0, 2147483647>|null,
     *     EntryType?: 'FMS_MANAGED_FIRST_ENTRY'|'FMS_MANAGED_LAST_ENTRY'|'CUSTOM_ENTRY'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
