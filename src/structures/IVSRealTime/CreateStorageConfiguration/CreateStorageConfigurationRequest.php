<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\CreateStorageConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property Shapes\S3StorageConfiguration $s3
 * @property array<string, string> $tags
 */
class CreateStorageConfigurationRequest extends Request
{
    /**
     * @param array{
     *     name?: string,
     *     s3: Shapes\S3StorageConfiguration,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
