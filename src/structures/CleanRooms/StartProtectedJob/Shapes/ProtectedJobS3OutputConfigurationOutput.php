<?php

namespace Sunaoka\Aws\Structures\CleanRooms\StartProtectedJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bucket
 * @property string|null $keyPrefix
 */
class ProtectedJobS3OutputConfigurationOutput extends Shape
{
    /**
     * @param array{
     *     bucket: string,
     *     keyPrefix?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
