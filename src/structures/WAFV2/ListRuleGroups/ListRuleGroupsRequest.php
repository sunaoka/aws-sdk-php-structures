<?php

namespace Sunaoka\Aws\Structures\WAFV2\ListRuleGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'CLOUDFRONT'|'REGIONAL' $Scope
 * @property string $NextMarker
 * @property int<1, 100> $Limit
 */
class ListRuleGroupsRequest extends Request
{
    /**
     * @param array{
     *     Scope: 'CLOUDFRONT'|'REGIONAL',
     *     NextMarker?: string,
     *     Limit?: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
