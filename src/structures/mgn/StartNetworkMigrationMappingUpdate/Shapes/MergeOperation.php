<?php

namespace Sunaoka\Aws\Structures\mgn\StartNetworkMigrationMappingUpdate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<MergeConstruct>|null $mergeConstructs
 */
class MergeOperation extends Shape
{
    /**
     * @param array{mergeConstructs?: list<MergeConstruct>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
