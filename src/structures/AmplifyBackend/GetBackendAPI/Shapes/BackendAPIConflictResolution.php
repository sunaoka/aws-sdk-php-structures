<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\GetBackendAPI\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OPTIMISTIC_CONCURRENCY'|'LAMBDA'|'AUTOMERGE'|'NONE'|null $ResolutionStrategy
 */
class BackendAPIConflictResolution extends Shape
{
    /**
     * @param array{ResolutionStrategy?: 'OPTIMISTIC_CONCURRENCY'|'LAMBDA'|'AUTOMERGE'|'NONE'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
