<?php

namespace Sunaoka\Aws\Structures\mgn\StartNetworkMigrationMappingUpdate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $segmentID
 * @property string|null $constructID
 */
class MergeConstruct extends Shape
{
    /**
     * @param array{
     *     segmentID?: string|null,
     *     constructID?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
