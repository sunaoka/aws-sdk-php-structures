<?php

namespace Sunaoka\Aws\Structures\AppSync\UpdateSourceApiAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MANUAL_MERGE'|'AUTO_MERGE' $mergeType
 */
class SourceApiAssociationConfig extends Shape
{
    /**
     * @param array{mergeType?: 'MANUAL_MERGE'|'AUTO_MERGE'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
