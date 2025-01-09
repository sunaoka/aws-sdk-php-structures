<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\GetComposition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $storageConfigurationArn
 * @property list<string> $encoderConfigurationArns
 * @property RecordingConfiguration $recordingConfiguration
 * @property list<CompositionThumbnailConfiguration> $thumbnailConfigurations
 */
class S3DestinationConfiguration extends Shape
{
    /**
     * @param array{
     *     storageConfigurationArn: string,
     *     encoderConfigurationArns: list<string>,
     *     recordingConfiguration?: RecordingConfiguration,
     *     thumbnailConfigurations?: list<CompositionThumbnailConfiguration>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
