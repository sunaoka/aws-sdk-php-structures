<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeImport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $s3BucketName
 * @property string $s3Path
 */
class TestSetImportInputLocation extends Shape
{
    /**
     * @param array{
     *     s3BucketName: string,
     *     s3Path: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
