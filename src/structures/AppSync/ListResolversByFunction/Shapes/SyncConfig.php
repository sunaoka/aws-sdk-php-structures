<?php

namespace Sunaoka\Aws\Structures\AppSync\ListResolversByFunction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OPTIMISTIC_CONCURRENCY'|'LAMBDA'|'AUTOMERGE'|'NONE'|null $conflictHandler
 * @property 'VERSION'|'NONE'|null $conflictDetection
 * @property LambdaConflictHandlerConfig|null $lambdaConflictHandlerConfig
 */
class SyncConfig extends Shape
{
    /**
     * @param array{
     *     conflictHandler?: 'OPTIMISTIC_CONCURRENCY'|'LAMBDA'|'AUTOMERGE'|'NONE'|null,
     *     conflictDetection?: 'VERSION'|'NONE'|null,
     *     lambdaConflictHandlerConfig?: LambdaConflictHandlerConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
