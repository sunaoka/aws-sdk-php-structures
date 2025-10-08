<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeComputationModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $actionDefinitionId
 * @property string $actionName
 * @property string $actionType
 */
class ActionDefinition extends Shape
{
    /**
     * @param array{
     *     actionDefinitionId: string,
     *     actionName: string,
     *     actionType: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
