<?php

namespace Sunaoka\Aws\Structures\Pinpoint\CreateSegment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, int> $ChannelCounts
 * @property string $ExternalId
 * @property 'CSV'|'JSON' $Format
 * @property string $RoleArn
 * @property string $S3Url
 * @property int $Size
 */
class SegmentImportResource extends Shape
{
    /**
     * @param array{
     *     ChannelCounts?: array<string, int>,
     *     ExternalId: string,
     *     Format: 'CSV'|'JSON',
     *     RoleArn: string,
     *     S3Url: string,
     *     Size: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
