<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\GetStorageConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $name
 * @property S3StorageConfiguration $s3
 * @property array<string, string> $tags
 */
class StorageConfiguration extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     name?: string,
     *     s3?: S3StorageConfiguration,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
