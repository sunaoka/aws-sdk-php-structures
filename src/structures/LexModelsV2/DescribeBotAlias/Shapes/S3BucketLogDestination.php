<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeBotAlias\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $kmsKeyArn
 * @property string $s3BucketArn
 * @property string $logPrefix
 */
class S3BucketLogDestination extends Shape
{
    /**
     * @param array{
     *     kmsKeyArn?: string,
     *     s3BucketArn: string,
     *     logPrefix: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
