<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\UpdateStreamStorageConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $StreamName
 * @property string|null $StreamARN
 * @property string $CurrentVersion
 * @property Shapes\StreamStorageConfiguration $StreamStorageConfiguration
 */
class UpdateStreamStorageConfigurationRequest extends Request
{
    /**
     * @param array{
     *     StreamName?: string|null,
     *     StreamARN?: string|null,
     *     CurrentVersion: string,
     *     StreamStorageConfiguration: Shapes\StreamStorageConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
