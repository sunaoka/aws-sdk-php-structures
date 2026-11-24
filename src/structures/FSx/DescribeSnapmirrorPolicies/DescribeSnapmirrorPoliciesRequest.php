<?php

namespace Sunaoka\Aws\Structures\FSx\DescribeSnapmirrorPolicies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $SnapmirrorPolicyIds
 * @property list<Shapes\SnapmirrorPolicyFilter>|null $Filters
 * @property int<1, 2147483647>|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeSnapmirrorPoliciesRequest extends Request
{
    /**
     * @param array{
     *     SnapmirrorPolicyIds?: list<string>|null,
     *     Filters?: list<Shapes\SnapmirrorPolicyFilter>|null,
     *     MaxResults?: int<1, 2147483647>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
