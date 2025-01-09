<?php

namespace Sunaoka\Aws\Structures\EMRContainers\ListJobRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $entryPoint
 * @property list<string> $entryPointArguments
 * @property string $sparkSubmitParameters
 */
class SparkSubmitJobDriver extends Shape
{
    /**
     * @param array{
     *     entryPoint: string,
     *     entryPointArguments?: list<string>,
     *     sparkSubmitParameters?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
