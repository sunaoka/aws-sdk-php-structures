<?php

namespace Sunaoka\Aws\Structures\Ecs\RunTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $sizeInGiB
 * @property string|null $kmsKeyId
 */
class TaskEphemeralStorage extends Shape
{
    /**
     * @param array{
     *     sizeInGiB?: int|null,
     *     kmsKeyId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
