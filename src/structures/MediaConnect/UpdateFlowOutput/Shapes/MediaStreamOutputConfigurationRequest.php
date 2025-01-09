<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateFlowOutput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DestinationConfigurationRequest> $DestinationConfigurations
 * @property 'jxsv'|'raw'|'smpte291'|'pcm' $EncodingName
 * @property EncodingParametersRequest $EncodingParameters
 * @property string $MediaStreamName
 */
class MediaStreamOutputConfigurationRequest extends Shape
{
    /**
     * @param array{
     *     DestinationConfigurations?: list<DestinationConfigurationRequest>,
     *     EncodingName: 'jxsv'|'raw'|'smpte291'|'pcm',
     *     EncodingParameters?: EncodingParametersRequest,
     *     MediaStreamName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
