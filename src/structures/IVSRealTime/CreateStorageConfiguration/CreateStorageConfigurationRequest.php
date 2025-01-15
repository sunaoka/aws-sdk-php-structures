<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\CreateStorageConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $name
 * @property Shapes\S3StorageConfiguration $s3
 * @property array<string, string>|null $tags
 */
class CreateStorageConfigurationRequest extends Request
{
    /**
     * @param array{
     *     name?: string|null,
     *     s3: Shapes\S3StorageConfiguration,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
