<?php

namespace Sunaoka\Aws\Structures\MediaConnect\CreateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'jxsv'|'raw'|'smpte291'|'pcm' $EncodingName
 * @property list<InputConfiguration>|null $InputConfigurations
 * @property string $MediaStreamName
 */
class MediaStreamSourceConfiguration extends Shape
{
    /**
     * @param array{
     *     EncodingName: 'jxsv'|'raw'|'smpte291'|'pcm',
     *     InputConfigurations?: list<InputConfiguration>|null,
     *     MediaStreamName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
