<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\ListStorageConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string|null $name
 * @property S3StorageConfiguration|null $s3
 * @property array<string, string>|null $tags
 */
class StorageConfigurationSummary extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     name?: string|null,
     *     s3?: S3StorageConfiguration|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
