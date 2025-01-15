<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateDataQualityJobDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Line
 */
class MonitoringJsonDatasetFormat extends Shape
{
    /**
     * @param array{Line?: bool|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
