<?php

namespace Sunaoka\Aws\Structures\MediaConnect\DescribeFlowSourceMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ApplicationName
 * @property string|null $StreamName
 * @property RtmpMediaInfo $MediaInfo
 */
class RtmpSourceMetadataInfo extends Shape
{
    /**
     * @param array{
     *     ApplicationName?: string|null,
     *     StreamName?: string|null,
     *     MediaInfo: RtmpMediaInfo
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
