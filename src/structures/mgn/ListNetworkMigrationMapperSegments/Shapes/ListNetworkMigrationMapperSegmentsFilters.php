<?php

namespace Sunaoka\Aws\Structures\mgn\ListNetworkMigrationMapperSegments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $segmentIDs
 */
class ListNetworkMigrationMapperSegmentsFilters extends Shape
{
    /**
     * @param array{segmentIDs?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
