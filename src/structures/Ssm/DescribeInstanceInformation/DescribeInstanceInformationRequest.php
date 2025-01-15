<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeInstanceInformation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\InstanceInformationFilter>|null $InstanceInformationFilterList
 * @property list<Shapes\InstanceInformationStringFilter>|null $Filters
 * @property int<5, 50>|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeInstanceInformationRequest extends Request
{
    /**
     * @param array{
     *     InstanceInformationFilterList?: list<Shapes\InstanceInformationFilter>|null,
     *     Filters?: list<Shapes\InstanceInformationStringFilter>|null,
     *     MaxResults?: int<5, 50>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
