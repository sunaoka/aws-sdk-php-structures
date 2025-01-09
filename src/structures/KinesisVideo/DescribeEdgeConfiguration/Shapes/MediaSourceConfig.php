<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\DescribeEdgeConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MediaUriSecretArn
 * @property 'RTSP_URI'|'FILE_URI' $MediaUriType
 */
class MediaSourceConfig extends Shape
{
    /**
     * @param array{
     *     MediaUriSecretArn: string,
     *     MediaUriType: 'RTSP_URI'|'FILE_URI'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
