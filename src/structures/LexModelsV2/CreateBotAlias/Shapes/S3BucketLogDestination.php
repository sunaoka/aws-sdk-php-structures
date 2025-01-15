<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\CreateBotAlias\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $kmsKeyArn
 * @property string $s3BucketArn
 * @property string $logPrefix
 */
class S3BucketLogDestination extends Shape
{
    /**
     * @param array{
     *     kmsKeyArn?: string|null,
     *     s3BucketArn: string,
     *     logPrefix: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
