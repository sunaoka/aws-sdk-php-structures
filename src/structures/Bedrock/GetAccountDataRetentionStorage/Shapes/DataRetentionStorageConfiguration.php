<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetAccountDataRetentionStorage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $kmsKeyArn
 * @property string $s3BucketArn
 * @property string $s3BucketOwner
 */
class DataRetentionStorageConfiguration extends Shape
{
    /**
     * @param array{
     *     kmsKeyArn: string,
     *     s3BucketArn: string,
     *     s3BucketOwner: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
