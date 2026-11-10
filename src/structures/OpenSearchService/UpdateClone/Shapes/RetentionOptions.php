<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\UpdateClone\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $RetentionInHours
 * @property 'RollbackToPrimaryCluster'|'DeletePrimaryCluster'|null $RetentionAction
 */
class RetentionOptions extends Shape
{
    /**
     * @param array{
     *     RetentionInHours?: int|null,
     *     RetentionAction?: 'RollbackToPrimaryCluster'|'DeletePrimaryCluster'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
