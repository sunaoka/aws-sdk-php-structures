<?php

namespace Sunaoka\Aws\Structures\ConnectHealth\StartPatientInsightsJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainId
 * @property Shapes\PatientInsightsPatientContext $patientContext
 * @property Shapes\InsightsContext $insightsContext
 * @property Shapes\PatientInsightsEncounterContext $encounterContext
 * @property Shapes\UserContext $userContext
 * @property Shapes\InputDataConfig $inputDataConfig
 * @property Shapes\OutputDataConfig $outputDataConfig
 * @property string|null $clientToken
 */
class StartPatientInsightsJobRequest extends Request
{
    /**
     * @param array{
     *     domainId: string,
     *     patientContext: Shapes\PatientInsightsPatientContext,
     *     insightsContext: Shapes\InsightsContext,
     *     encounterContext: Shapes\PatientInsightsEncounterContext,
     *     userContext: Shapes\UserContext,
     *     inputDataConfig: Shapes\InputDataConfig,
     *     outputDataConfig: Shapes\OutputDataConfig,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
