<?php

namespace Sunaoka\Aws\Structures\IVS\CreateRecordingConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $name
 * @property Shapes\DestinationConfiguration $destinationConfiguration
 * @property array<string, string>|null $tags
 * @property Shapes\ThumbnailConfiguration|null $thumbnailConfiguration
 * @property int<0, 300>|null $recordingReconnectWindowSeconds
 * @property Shapes\RenditionConfiguration|null $renditionConfiguration
 */
class CreateRecordingConfigurationRequest extends Request
{
    /**
     * @param array{
     *     name?: string|null,
     *     destinationConfiguration: Shapes\DestinationConfiguration,
     *     tags?: array<string, string>|null,
     *     thumbnailConfiguration?: Shapes\ThumbnailConfiguration|null,
     *     recordingReconnectWindowSeconds?: int<0, 300>|null,
     *     renditionConfiguration?: Shapes\RenditionConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
