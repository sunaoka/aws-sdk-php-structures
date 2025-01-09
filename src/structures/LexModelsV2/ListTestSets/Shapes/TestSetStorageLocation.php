<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListTestSets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $s3BucketName
 * @property string $s3Path
 * @property string $kmsKeyArn
 */
class TestSetStorageLocation extends Shape
{
    /**
     * @param array{
     *     s3BucketName: string,
     *     s3Path: string,
     *     kmsKeyArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
