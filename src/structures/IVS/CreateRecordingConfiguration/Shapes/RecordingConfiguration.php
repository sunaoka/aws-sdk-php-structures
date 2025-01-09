<?php

namespace Sunaoka\Aws\Structures\IVS\CreateRecordingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property DestinationConfiguration $destinationConfiguration
 * @property string $name
 * @property int $recordingReconnectWindowSeconds
 * @property RenditionConfiguration $renditionConfiguration
 * @property 'CREATING'|'CREATE_FAILED'|'ACTIVE' $state
 * @property array<string, string> $tags
 * @property ThumbnailConfiguration $thumbnailConfiguration
 */
class RecordingConfiguration extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     destinationConfiguration: DestinationConfiguration,
     *     name?: string,
     *     recordingReconnectWindowSeconds?: int,
     *     renditionConfiguration?: RenditionConfiguration,
     *     state: 'CREATING'|'CREATE_FAILED'|'ACTIVE',
     *     tags?: array<string, string>,
     *     thumbnailConfiguration?: ThumbnailConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
