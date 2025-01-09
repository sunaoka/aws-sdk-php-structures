<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateModelExplainabilityJobDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Line
 */
class MonitoringJsonDatasetFormat extends Shape
{
    /**
     * @param array{Line?: bool} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
