<?php

namespace Sunaoka\Aws\Structures\MediaConnect\DescribeFlowSourceMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NdiSourceInfo|null $ActiveSource
 * @property list<NdiSourceInfo> $DiscoveredSources
 * @property NdiMediaInfo $MediaInfo
 * @property list<MessageDetail> $Messages
 */
class NdiSourceMetadataInfo extends Shape
{
    /**
     * @param array{
     *     ActiveSource?: NdiSourceInfo|null,
     *     DiscoveredSources: list<NdiSourceInfo>,
     *     MediaInfo: NdiMediaInfo,
     *     Messages: list<MessageDetail>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
