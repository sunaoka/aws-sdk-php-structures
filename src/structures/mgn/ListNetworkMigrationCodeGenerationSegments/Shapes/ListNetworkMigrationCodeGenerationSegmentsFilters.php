<?php

namespace Sunaoka\Aws\Structures\mgn\ListNetworkMigrationCodeGenerationSegments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $segmentIDs
 */
class ListNetworkMigrationCodeGenerationSegmentsFilters extends Shape
{
    /**
     * @param array{segmentIDs?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
