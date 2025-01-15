<?php

namespace Sunaoka\Aws\Structures\AppSync\AssociateMergedGraphqlApi\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MANUAL_MERGE'|'AUTO_MERGE'|null $mergeType
 */
class SourceApiAssociationConfig extends Shape
{
    /**
     * @param array{mergeType?: 'MANUAL_MERGE'|'AUTO_MERGE'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
