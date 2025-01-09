<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateTrainingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $S3OutputPath
 * @property int $ProfilingIntervalInMilliseconds
 * @property array<string, string> $ProfilingParameters
 * @property bool $DisableProfiler
 */
class ProfilerConfigForUpdate extends Shape
{
    /**
     * @param array{
     *     S3OutputPath?: string,
     *     ProfilingIntervalInMilliseconds?: int,
     *     ProfilingParameters?: array<string, string>,
     *     DisableProfiler?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
