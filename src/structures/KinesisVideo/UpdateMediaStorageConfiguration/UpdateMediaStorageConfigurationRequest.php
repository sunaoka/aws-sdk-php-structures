<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\UpdateMediaStorageConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelARN
 * @property Shapes\MediaStorageConfiguration $MediaStorageConfiguration
 */
class UpdateMediaStorageConfigurationRequest extends Request
{
    /**
     * @param array{
     *     ChannelARN: string,
     *     MediaStorageConfiguration: Shapes\MediaStorageConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
