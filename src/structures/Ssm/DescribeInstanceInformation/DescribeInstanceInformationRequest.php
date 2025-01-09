<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeInstanceInformation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\InstanceInformationFilter> $InstanceInformationFilterList
 * @property list<Shapes\InstanceInformationStringFilter> $Filters
 * @property int<5, 50> $MaxResults
 * @property string $NextToken
 */
class DescribeInstanceInformationRequest extends Request
{
    /**
     * @param array{
     *     InstanceInformationFilterList?: list<Shapes\InstanceInformationFilter>,
     *     Filters?: list<Shapes\InstanceInformationStringFilter>,
     *     MaxResults?: int<5, 50>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
