<?php

namespace Sunaoka\Aws\Structures\FSx\DescribeSnapshotPolicies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $SnapshotPolicyIds
 * @property list<Shapes\SnapshotPolicyFilter>|null $Filters
 * @property int<1, 2147483647>|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeSnapshotPoliciesRequest extends Request
{
    /**
     * @param array{
     *     SnapshotPolicyIds?: list<string>|null,
     *     Filters?: list<Shapes\SnapshotPolicyFilter>|null,
     *     MaxResults?: int<1, 2147483647>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
