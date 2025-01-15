<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\StartComposition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $storageConfigurationArn
 * @property list<string> $encoderConfigurationArns
 * @property RecordingConfiguration|null $recordingConfiguration
 * @property list<CompositionThumbnailConfiguration>|null $thumbnailConfigurations
 */
class S3DestinationConfiguration extends Shape
{
    /**
     * @param array{
     *     storageConfigurationArn: string,
     *     encoderConfigurationArns: list<string>,
     *     recordingConfiguration?: RecordingConfiguration|null,
     *     thumbnailConfigurations?: list<CompositionThumbnailConfiguration>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
