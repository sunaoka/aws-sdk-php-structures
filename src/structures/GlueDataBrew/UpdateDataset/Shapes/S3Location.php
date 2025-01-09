<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\UpdateDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Bucket
 * @property string $Key
 * @property string $BucketOwner
 */
class S3Location extends Shape
{
    /**
     * @param array{
     *     Bucket: string,
     *     Key?: string,
     *     BucketOwner?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
