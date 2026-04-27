<?php

namespace Sunaoka\Aws\Structures\mgn\StartNetworkMigrationMappingUpdate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SplitConstruct>|null $splitConstructs
 */
class SplitOperation extends Shape
{
    /**
     * @param array{splitConstructs?: list<SplitConstruct>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
