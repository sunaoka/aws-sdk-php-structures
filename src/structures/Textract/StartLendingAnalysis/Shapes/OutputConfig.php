<?php

namespace Sunaoka\Aws\Structures\Textract\StartLendingAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $S3Bucket
 * @property string|null $S3Prefix
 */
class OutputConfig extends Shape
{
    /**
     * @param array{
     *     S3Bucket: string,
     *     S3Prefix?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
