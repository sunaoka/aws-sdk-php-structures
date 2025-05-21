<?php

namespace Sunaoka\Aws\Structures\CleanRooms\StartProtectedJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'PYSPARK' $type
 * @property string $membershipIdentifier
 * @property Shapes\ProtectedJobParameters $jobParameters
 * @property Shapes\ProtectedJobResultConfigurationInput|null $resultConfiguration
 */
class StartProtectedJobRequest extends Request
{
    /**
     * @param array{
     *     type: 'PYSPARK',
     *     membershipIdentifier: string,
     *     jobParameters: Shapes\ProtectedJobParameters,
     *     resultConfiguration?: Shapes\ProtectedJobResultConfigurationInput|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
