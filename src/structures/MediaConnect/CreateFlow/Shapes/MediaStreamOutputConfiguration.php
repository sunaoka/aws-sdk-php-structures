<?php

namespace Sunaoka\Aws\Structures\MediaConnect\CreateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DestinationConfiguration>|null $DestinationConfigurations
 * @property 'jxsv'|'raw'|'smpte291'|'pcm' $EncodingName
 * @property EncodingParameters|null $EncodingParameters
 * @property string $MediaStreamName
 */
class MediaStreamOutputConfiguration extends Shape
{
    /**
     * @param array{
     *     DestinationConfigurations?: list<DestinationConfiguration>|null,
     *     EncodingName: 'jxsv'|'raw'|'smpte291'|'pcm',
     *     EncodingParameters?: EncodingParameters|null,
     *     MediaStreamName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
