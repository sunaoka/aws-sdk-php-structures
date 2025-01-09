<?php

namespace Sunaoka\Aws\Structures\MediaConnect\DescribeFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'jxsv'|'raw'|'smpte291'|'pcm' $EncodingName
 * @property list<InputConfiguration> $InputConfigurations
 * @property string $MediaStreamName
 */
class MediaStreamSourceConfiguration extends Shape
{
    /**
     * @param array{
     *     EncodingName: 'jxsv'|'raw'|'smpte291'|'pcm',
     *     InputConfigurations?: list<InputConfiguration>,
     *     MediaStreamName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
