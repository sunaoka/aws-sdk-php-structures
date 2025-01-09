<?php

namespace Sunaoka\Aws\Structures\Transfer\ListExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ExecutionId
 * @property FileLocation $InitialFileLocation
 * @property ServiceMetadata $ServiceMetadata
 * @property 'IN_PROGRESS'|'COMPLETED'|'EXCEPTION'|'HANDLING_EXCEPTION' $Status
 */
class ListedExecution extends Shape
{
    /**
     * @param array{
     *     ExecutionId?: string,
     *     InitialFileLocation?: FileLocation,
     *     ServiceMetadata?: ServiceMetadata,
     *     Status?: 'IN_PROGRESS'|'COMPLETED'|'EXCEPTION'|'HANDLING_EXCEPTION'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
