<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeNodeConfigurationOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NodeType'|'NumberOfNodes'|'EstimatedDiskUtilizationPercent'|'Mode'|null $Name
 * @property 'eq'|'lt'|'gt'|'le'|'ge'|'in'|'between'|null $Operator
 * @property list<string>|null $Values
 */
class NodeConfigurationOptionsFilter extends Shape
{
    /**
     * @param array{
     *     Name?: 'NodeType'|'NumberOfNodes'|'EstimatedDiskUtilizationPercent'|'Mode'|null,
     *     Operator?: 'eq'|'lt'|'gt'|'le'|'ge'|'in'|'between'|null,
     *     Values?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
