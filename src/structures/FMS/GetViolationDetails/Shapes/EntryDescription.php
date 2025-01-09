<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NetworkAclEntry $EntryDetail
 * @property int<0, 2147483647> $EntryRuleNumber
 * @property 'FMS_MANAGED_FIRST_ENTRY'|'FMS_MANAGED_LAST_ENTRY'|'CUSTOM_ENTRY' $EntryType
 */
class EntryDescription extends Shape
{
    /**
     * @param array{
     *     EntryDetail?: NetworkAclEntry,
     *     EntryRuleNumber?: int<0, 2147483647>,
     *     EntryType?: 'FMS_MANAGED_FIRST_ENTRY'|'FMS_MANAGED_LAST_ENTRY'|'CUSTOM_ENTRY'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
