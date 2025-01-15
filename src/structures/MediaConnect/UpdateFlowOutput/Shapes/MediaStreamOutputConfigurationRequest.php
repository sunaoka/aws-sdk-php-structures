<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateFlowOutput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DestinationConfigurationRequest>|null $DestinationConfigurations
 * @property 'jxsv'|'raw'|'smpte291'|'pcm' $EncodingName
 * @property EncodingParametersRequest|null $EncodingParameters
 * @property string $MediaStreamName
 */
class MediaStreamOutputConfigurationRequest extends Shape
{
    /**
     * @param array{
     *     DestinationConfigurations?: list<DestinationConfigurationRequest>|null,
     *     EncodingName: 'jxsv'|'raw'|'smpte291'|'pcm',
     *     EncodingParameters?: EncodingParametersRequest|null,
     *     MediaStreamName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
