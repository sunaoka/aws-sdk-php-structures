<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribePolicies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AutoScalingGroupName
 * @property list<string>|null $PolicyNames
 * @property list<string>|null $PolicyTypes
 * @property string|null $NextToken
 * @property int|null $MaxRecords
 */
class DescribePoliciesRequest extends Request
{
    /**
     * @param array{
     *     AutoScalingGroupName?: string|null,
     *     PolicyNames?: list<string>|null,
     *     PolicyTypes?: list<string>|null,
     *     NextToken?: string|null,
     *     MaxRecords?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
