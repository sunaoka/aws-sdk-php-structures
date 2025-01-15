<?php

namespace Sunaoka\Aws\Structures\EMRContainers\ListJobTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $entryPoint
 * @property list<string>|null $entryPointArguments
 * @property string|null $sparkSubmitParameters
 */
class SparkSubmitJobDriver extends Shape
{
    /**
     * @param array{
     *     entryPoint: string,
     *     entryPointArguments?: list<string>|null,
     *     sparkSubmitParameters?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
