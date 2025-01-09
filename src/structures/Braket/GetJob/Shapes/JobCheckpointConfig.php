<?php

namespace Sunaoka\Aws\Structures\Braket\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $localPath
 * @property string $s3Uri
 */
class JobCheckpointConfig extends Shape
{
    /**
     * @param array{
     *     localPath?: string,
     *     s3Uri: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
