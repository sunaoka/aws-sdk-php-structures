<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribePipelineExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string>|null $global
 * @property array<string, array<string, string>>|null $computeNodes
 */
class ExecutionEnvironmentVariables extends Shape
{
    /**
     * @param array{
     *     global?: array<string, string>|null,
     *     computeNodes?: array<string, array<string, string>>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
