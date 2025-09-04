<?php

namespace Sunaoka\Aws\Structures\CleanRooms\StartProtectedJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'PYSPARK' $type
 * @property string $membershipIdentifier
 * @property Shapes\ProtectedJobParameters $jobParameters
 * @property Shapes\ProtectedJobResultConfigurationInput|null $resultConfiguration
 * @property Shapes\ProtectedJobComputeConfiguration|null $computeConfiguration
 */
class StartProtectedJobRequest extends Request
{
    /**
     * @param array{
     *     type: 'PYSPARK',
     *     membershipIdentifier: string,
     *     jobParameters: Shapes\ProtectedJobParameters,
     *     resultConfiguration?: Shapes\ProtectedJobResultConfigurationInput|null,
     *     computeConfiguration?: Shapes\ProtectedJobComputeConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
