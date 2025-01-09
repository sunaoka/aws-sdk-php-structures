<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateFlowOutput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DestinationConfiguration> $DestinationConfigurations
 * @property 'jxsv'|'raw'|'smpte291'|'pcm' $EncodingName
 * @property EncodingParameters $EncodingParameters
 * @property string $MediaStreamName
 */
class MediaStreamOutputConfiguration extends Shape
{
    /**
     * @param array{
     *     DestinationConfigurations?: list<DestinationConfiguration>,
     *     EncodingName: 'jxsv'|'raw'|'smpte291'|'pcm',
     *     EncodingParameters?: EncodingParameters,
     *     MediaStreamName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
