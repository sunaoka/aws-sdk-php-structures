<?php

namespace Sunaoka\Aws\Structures\Appstream\DescribeAppBlocks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3Location $ScriptS3Location
 * @property string $ExecutablePath
 * @property string $ExecutableParameters
 * @property int $TimeoutInSeconds
 */
class ScriptDetails extends Shape
{
    /**
     * @param array{
     *     ScriptS3Location: S3Location,
     *     ExecutablePath: string,
     *     ExecutableParameters?: string,
     *     TimeoutInSeconds: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
