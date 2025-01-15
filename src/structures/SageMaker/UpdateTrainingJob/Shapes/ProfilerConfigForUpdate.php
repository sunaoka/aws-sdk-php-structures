<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateTrainingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $S3OutputPath
 * @property int|null $ProfilingIntervalInMilliseconds
 * @property array<string, string>|null $ProfilingParameters
 * @property bool|null $DisableProfiler
 */
class ProfilerConfigForUpdate extends Shape
{
    /**
     * @param array{
     *     S3OutputPath?: string|null,
     *     ProfilingIntervalInMilliseconds?: int|null,
     *     ProfilingParameters?: array<string, string>|null,
     *     DisableProfiler?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
