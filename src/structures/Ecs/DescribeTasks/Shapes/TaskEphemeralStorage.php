<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $sizeInGiB
 * @property string $kmsKeyId
 */
class TaskEphemeralStorage extends Shape
{
    /**
     * @param array{
     *     sizeInGiB?: int,
     *     kmsKeyId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
