<?php

namespace Sunaoka\Aws\Structures\Waf\ListRuleGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextMarker
 * @property int<0, 100> $Limit
 */
class ListRuleGroupsRequest extends Request
{
    /**
     * @param array{
     *     NextMarker?: string,
     *     Limit?: int<0, 100>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
