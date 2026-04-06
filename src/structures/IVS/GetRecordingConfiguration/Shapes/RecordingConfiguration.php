<?php

namespace Sunaoka\Aws\Structures\IVS\GetRecordingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property DestinationConfiguration $destinationConfiguration
 * @property string|null $name
 * @property int<0, 300>|null $recordingReconnectWindowSeconds
 * @property RenditionConfiguration|null $renditionConfiguration
 * @property 'CREATING'|'CREATE_FAILED'|'ACTIVE' $state
 * @property array<string, string>|null $tags
 * @property ThumbnailConfiguration|null $thumbnailConfiguration
 */
class RecordingConfiguration extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     destinationConfiguration: DestinationConfiguration,
     *     name?: string|null,
     *     recordingReconnectWindowSeconds?: int<0, 300>|null,
     *     renditionConfiguration?: RenditionConfiguration|null,
     *     state: 'CREATING'|'CREATE_FAILED'|'ACTIVE',
     *     tags?: array<string, string>|null,
     *     thumbnailConfiguration?: ThumbnailConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
