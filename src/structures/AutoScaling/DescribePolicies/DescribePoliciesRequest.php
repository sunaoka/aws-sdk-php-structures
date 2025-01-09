<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribePolicies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AutoScalingGroupName
 * @property list<string> $PolicyNames
 * @property list<string> $PolicyTypes
 * @property string $NextToken
 * @property int $MaxRecords
 */
class DescribePoliciesRequest extends Request
{
    /**
     * @param array{
     *     AutoScalingGroupName?: string,
     *     PolicyNames?: list<string>,
     *     PolicyTypes?: list<string>,
     *     NextToken?: string,
     *     MaxRecords?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
