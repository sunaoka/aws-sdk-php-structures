<?php

namespace Sunaoka\Aws\Structures\BCMDataExports\GetExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $S3Bucket
 * @property S3OutputConfigurations $S3OutputConfigurations
 * @property string $S3Prefix
 * @property string $S3Region
 */
class S3Destination extends Shape
{
    /**
     * @param array{
     *     S3Bucket: string,
     *     S3OutputConfigurations: S3OutputConfigurations,
     *     S3Prefix: string,
     *     S3Region: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
