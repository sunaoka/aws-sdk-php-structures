<?php

namespace Sunaoka\Aws\Structures\mgn\ListNetworkMigrationMapperSegmentConstructs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $constructIDs
 * @property list<string>|null $constructTypes
 */
class ListNetworkMigrationMapperSegmentConstructsFilters extends Shape
{
    /**
     * @param array{
     *     constructIDs?: list<string>|null,
     *     constructTypes?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
