<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $S3Bucket
 * @property string|null $S3Key
 * @property string|null $S3ObjectVersion
 * @property string|null $ZipFile
 */
class AwsLambdaFunctionCode extends Shape
{
    /**
     * @param array{
     *     S3Bucket?: string|null,
     *     S3Key?: string|null,
     *     S3ObjectVersion?: string|null,
     *     ZipFile?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
