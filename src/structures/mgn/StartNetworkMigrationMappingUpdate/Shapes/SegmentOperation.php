<?php

namespace Sunaoka\Aws\Structures\mgn\StartNetworkMigrationMappingUpdate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SegmentCreateOperation|null $create
 * @property SegmentUpdateOperation|null $update
 * @property SegmentDeleteOperation|null $delete
 */
class SegmentOperation extends Shape
{
    /**
     * @param array{
     *     create?: SegmentCreateOperation|null,
     *     update?: SegmentUpdateOperation|null,
     *     delete?: SegmentDeleteOperation|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
