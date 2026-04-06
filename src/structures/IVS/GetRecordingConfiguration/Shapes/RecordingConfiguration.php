<?php

namespace Sunaoka\Aws\Structures\IVS\GetRecordingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string|null $name
 * @property DestinationConfiguration $destinationConfiguration
 * @property 'CREATING'|'CREATE_FAILED'|'ACTIVE' $state
 * @property array<string, string>|null $tags
 * @property ThumbnailConfiguration|null $thumbnailConfiguration
 * @property int<0, 300>|null $recordingReconnectWindowSeconds
 * @property RenditionConfiguration|null $renditionConfiguration
 */
class RecordingConfiguration extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     name?: string|null,
     *     destinationConfiguration: DestinationConfiguration,
     *     state: 'CREATING'|'CREATE_FAILED'|'ACTIVE',
     *     tags?: array<string, string>|null,
     *     thumbnailConfiguration?: ThumbnailConfiguration|null,
     *     recordingReconnectWindowSeconds?: int<0, 300>|null,
     *     renditionConfiguration?: RenditionConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
