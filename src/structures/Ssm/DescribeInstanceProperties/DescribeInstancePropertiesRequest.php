<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeInstanceProperties;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\InstancePropertyFilter> $InstancePropertyFilterList
 * @property list<Shapes\InstancePropertyStringFilter> $FiltersWithOperator
 * @property int $MaxResults
 * @property string $NextToken
 */
class DescribeInstancePropertiesRequest extends Request
{
    /**
     * @param array{
     *     InstancePropertyFilterList?: list<Shapes\InstancePropertyFilter>,
     *     FiltersWithOperator?: list<Shapes\InstancePropertyStringFilter>,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
