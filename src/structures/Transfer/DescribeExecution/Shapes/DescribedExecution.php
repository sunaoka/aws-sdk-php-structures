<?php

namespace Sunaoka\Aws\Structures\Transfer\DescribeExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ExecutionId
 * @property FileLocation $InitialFileLocation
 * @property ServiceMetadata $ServiceMetadata
 * @property string $ExecutionRole
 * @property LoggingConfiguration $LoggingConfiguration
 * @property PosixProfile $PosixProfile
 * @property 'IN_PROGRESS'|'COMPLETED'|'EXCEPTION'|'HANDLING_EXCEPTION' $Status
 * @property ExecutionResults $Results
 */
class DescribedExecution extends Shape
{
    /**
     * @param array{
     *     ExecutionId?: string,
     *     InitialFileLocation?: FileLocation,
     *     ServiceMetadata?: ServiceMetadata,
     *     ExecutionRole?: string,
     *     LoggingConfiguration?: LoggingConfiguration,
     *     PosixProfile?: PosixProfile,
     *     Status?: 'IN_PROGRESS'|'COMPLETED'|'EXCEPTION'|'HANDLING_EXCEPTION',
     *     Results?: ExecutionResults
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
