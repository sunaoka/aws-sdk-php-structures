<?php

namespace Sunaoka\Aws\Structures\IVS\CreateRecordingConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\DestinationConfiguration $destinationConfiguration
 * @property string $name
 * @property int $recordingReconnectWindowSeconds
 * @property Shapes\RenditionConfiguration $renditionConfiguration
 * @property array<string, string> $tags
 * @property Shapes\ThumbnailConfiguration $thumbnailConfiguration
 */
class CreateRecordingConfigurationRequest extends Request
{
    /**
     * @param array{
     *     destinationConfiguration: Shapes\DestinationConfiguration,
     *     name?: string,
     *     recordingReconnectWindowSeconds?: int,
     *     renditionConfiguration?: Shapes\RenditionConfiguration,
     *     tags?: array<string, string>,
     *     thumbnailConfiguration?: Shapes\ThumbnailConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
