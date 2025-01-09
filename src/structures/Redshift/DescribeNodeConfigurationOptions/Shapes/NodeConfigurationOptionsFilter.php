<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeNodeConfigurationOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NodeType'|'NumberOfNodes'|'EstimatedDiskUtilizationPercent'|'Mode' $Name
 * @property 'eq'|'lt'|'gt'|'le'|'ge'|'in'|'between' $Operator
 * @property list<string> $Values
 */
class NodeConfigurationOptionsFilter extends Shape
{
    /**
     * @param array{
     *     Name?: 'NodeType'|'NumberOfNodes'|'EstimatedDiskUtilizationPercent'|'Mode',
     *     Operator?: 'eq'|'lt'|'gt'|'le'|'ge'|'in'|'between',
     *     Values?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
