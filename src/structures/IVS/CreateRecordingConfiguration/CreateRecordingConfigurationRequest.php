<?php

namespace Sunaoka\Aws\Structures\IVS\CreateRecordingConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\DestinationConfiguration $destinationConfiguration
 * @property string|null $name
 * @property int<0, 300>|null $recordingReconnectWindowSeconds
 * @property Shapes\RenditionConfiguration|null $renditionConfiguration
 * @property array<string, string>|null $tags
 * @property Shapes\ThumbnailConfiguration|null $thumbnailConfiguration
 */
class CreateRecordingConfigurationRequest extends Request
{
    /**
     * @param array{
     *     destinationConfiguration: Shapes\DestinationConfiguration,
     *     name?: string|null,
     *     recordingReconnectWindowSeconds?: int<0, 300>|null,
     *     renditionConfiguration?: Shapes\RenditionConfiguration|null,
     *     tags?: array<string, string>|null,
     *     thumbnailConfiguration?: Shapes\ThumbnailConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
