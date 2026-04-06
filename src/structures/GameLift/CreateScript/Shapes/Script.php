<?php

namespace Sunaoka\Aws\Structures\GameLift\CreateScript\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ScriptId
 * @property string|null $ScriptArn
 * @property string|null $Name
 * @property string|null $Version
 * @property int<1, max>|null $SizeOnDisk
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property S3Location|null $StorageLocation
 */
class Script extends Shape
{
    /**
     * @param array{
     *     ScriptId?: string|null,
     *     ScriptArn?: string|null,
     *     Name?: string|null,
     *     Version?: string|null,
     *     SizeOnDisk?: int<1, max>|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     StorageLocation?: S3Location|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
