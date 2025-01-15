<?php

namespace Sunaoka\Aws\Structures\WafRegional\ListRuleGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextMarker
 * @property int<0, 100>|null $Limit
 */
class ListRuleGroupsRequest extends Request
{
    /**
     * @param array{
     *     NextMarker?: string|null,
     *     Limit?: int<0, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
