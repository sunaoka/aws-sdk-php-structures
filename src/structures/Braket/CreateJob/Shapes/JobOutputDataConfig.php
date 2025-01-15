<?php

namespace Sunaoka\Aws\Structures\Braket\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $kmsKeyId
 * @property string $s3Path
 */
class JobOutputDataConfig extends Shape
{
    /**
     * @param array{
     *     kmsKeyId?: string|null,
     *     s3Path: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
