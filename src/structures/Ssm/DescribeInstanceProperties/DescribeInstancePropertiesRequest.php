<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeInstanceProperties;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\InstancePropertyFilter>|null $InstancePropertyFilterList
 * @property list<Shapes\InstancePropertyStringFilter>|null $FiltersWithOperator
 * @property int<5, 1000>|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeInstancePropertiesRequest extends Request
{
    /**
     * @param array{
     *     InstancePropertyFilterList?: list<Shapes\InstancePropertyFilter>|null,
     *     FiltersWithOperator?: list<Shapes\InstancePropertyStringFilter>|null,
     *     MaxResults?: int<5, 1000>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
