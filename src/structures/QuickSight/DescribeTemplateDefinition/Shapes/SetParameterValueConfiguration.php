<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DestinationParameterName
 * @property DestinationParameterValueConfiguration $Value
 */
class SetParameterValueConfiguration extends Shape
{
    /**
     * @param array{
     *     DestinationParameterName: string,
     *     Value: DestinationParameterValueConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
