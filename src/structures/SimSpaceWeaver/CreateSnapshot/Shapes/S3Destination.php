<?php

namespace Sunaoka\Aws\Structures\SimSpaceWeaver\CreateSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BucketName
 * @property string $ObjectKeyPrefix
 */
class S3Destination extends Shape
{
    /**
     * @param array{
     *     BucketName: string,
     *     ObjectKeyPrefix?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
