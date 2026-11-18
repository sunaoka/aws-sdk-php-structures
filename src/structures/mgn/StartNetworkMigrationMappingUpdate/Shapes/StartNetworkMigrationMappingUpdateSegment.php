<?php

namespace Sunaoka\Aws\Structures\mgn\StartNetworkMigrationMappingUpdate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $segmentID
 * @property string|null $segmentLogicalID
 * @property SegmentOperation|null $operation
 * @property string|null $targetAccount
 * @property array<string, string>|null $scopeTags
 */
class StartNetworkMigrationMappingUpdateSegment extends Shape
{
    /**
     * @param array{
     *     segmentID?: string|null,
     *     segmentLogicalID?: string|null,
     *     operation?: SegmentOperation|null,
     *     targetAccount?: string|null,
     *     scopeTags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
