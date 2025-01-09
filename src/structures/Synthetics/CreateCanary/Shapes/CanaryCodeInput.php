<?php

namespace Sunaoka\Aws\Structures\Synthetics\CreateCanary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $S3Bucket
 * @property string $S3Key
 * @property string $S3Version
 * @property string $ZipFile
 * @property string $Handler
 */
class CanaryCodeInput extends Shape
{
    /**
     * @param array{
     *     S3Bucket?: string,
     *     S3Key?: string,
     *     S3Version?: string,
     *     ZipFile?: string,
     *     Handler: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
