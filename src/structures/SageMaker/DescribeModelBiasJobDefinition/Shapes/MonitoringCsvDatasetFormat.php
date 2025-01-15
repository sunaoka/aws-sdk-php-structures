<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeModelBiasJobDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Header
 */
class MonitoringCsvDatasetFormat extends Shape
{
    /**
     * @param array{Header?: bool|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
