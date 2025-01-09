<?php

namespace Sunaoka\Aws\Structures\CodeGuruReviewer\AssociateRepository\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $BucketName
 */
class S3Repository extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     BucketName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
