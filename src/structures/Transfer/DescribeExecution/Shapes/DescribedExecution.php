<?php

namespace Sunaoka\Aws\Structures\Transfer\DescribeExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ExecutionId
 * @property FileLocation|null $InitialFileLocation
 * @property ServiceMetadata|null $ServiceMetadata
 * @property string|null $ExecutionRole
 * @property LoggingConfiguration|null $LoggingConfiguration
 * @property PosixProfile|null $PosixProfile
 * @property 'IN_PROGRESS'|'COMPLETED'|'EXCEPTION'|'HANDLING_EXCEPTION'|null $Status
 * @property ExecutionResults|null $Results
 */
class DescribedExecution extends Shape
{
    /**
     * @param array{
     *     ExecutionId?: string|null,
     *     InitialFileLocation?: FileLocation|null,
     *     ServiceMetadata?: ServiceMetadata|null,
     *     ExecutionRole?: string|null,
     *     LoggingConfiguration?: LoggingConfiguration|null,
     *     PosixProfile?: PosixProfile|null,
     *     Status?: 'IN_PROGRESS'|'COMPLETED'|'EXCEPTION'|'HANDLING_EXCEPTION'|null,
     *     Results?: ExecutionResults|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
