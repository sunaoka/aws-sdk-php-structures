<?php

namespace Sunaoka\Aws\Structures\Transfer\ListExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ExecutionId
 * @property FileLocation|null $InitialFileLocation
 * @property ServiceMetadata|null $ServiceMetadata
 * @property 'IN_PROGRESS'|'COMPLETED'|'EXCEPTION'|'HANDLING_EXCEPTION'|null $Status
 */
class ListedExecution extends Shape
{
    /**
     * @param array{
     *     ExecutionId?: string|null,
     *     InitialFileLocation?: FileLocation|null,
     *     ServiceMetadata?: ServiceMetadata|null,
     *     Status?: 'IN_PROGRESS'|'COMPLETED'|'EXCEPTION'|'HANDLING_EXCEPTION'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
