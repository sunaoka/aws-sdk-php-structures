<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateFlowSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'jxsv'|'raw'|'smpte291'|'pcm' $EncodingName
 * @property list<InputConfigurationRequest>|null $InputConfigurations
 * @property string $MediaStreamName
 */
class MediaStreamSourceConfigurationRequest extends Shape
{
    /**
     * @param array{
     *     EncodingName: 'jxsv'|'raw'|'smpte291'|'pcm',
     *     InputConfigurations?: list<InputConfigurationRequest>|null,
     *     MediaStreamName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
