<?php

namespace Sunaoka\Aws\Structures\GameLift\UpdateScript\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ScriptId
 * @property string $ScriptArn
 * @property string $Name
 * @property string $Version
 * @property int $SizeOnDisk
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property S3Location $StorageLocation
 */
class Script extends Shape
{
    /**
     * @param array{
     *     ScriptId?: string,
     *     ScriptArn?: string,
     *     Name?: string,
     *     Version?: string,
     *     SizeOnDisk?: int,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     StorageLocation?: S3Location
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
