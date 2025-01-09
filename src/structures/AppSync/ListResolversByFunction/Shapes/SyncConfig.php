<?php

namespace Sunaoka\Aws\Structures\AppSync\ListResolversByFunction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OPTIMISTIC_CONCURRENCY'|'LAMBDA'|'AUTOMERGE'|'NONE' $conflictHandler
 * @property 'VERSION'|'NONE' $conflictDetection
 * @property LambdaConflictHandlerConfig $lambdaConflictHandlerConfig
 */
class SyncConfig extends Shape
{
    /**
     * @param array{
     *     conflictHandler?: 'OPTIMISTIC_CONCURRENCY'|'LAMBDA'|'AUTOMERGE'|'NONE',
     *     conflictDetection?: 'VERSION'|'NONE',
     *     lambdaConflictHandlerConfig?: LambdaConflictHandlerConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
