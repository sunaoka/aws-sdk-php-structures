<?php

namespace Sunaoka\Aws\Structures\IoTDeviceAdvisor;

class IoTDeviceAdvisorClient extends \Aws\IoTDeviceAdvisor\IoTDeviceAdvisorClient
{
    use CreateSuiteDefinition\CreateSuiteDefinitionTrait;
    use DeleteSuiteDefinition\DeleteSuiteDefinitionTrait;
    use GetSuiteDefinition\GetSuiteDefinitionTrait;
    use GetSuiteRun\GetSuiteRunTrait;
    use GetSuiteRunReport\GetSuiteRunReportTrait;
    use ListSuiteDefinitions\ListSuiteDefinitionsTrait;
    use ListSuiteRuns\ListSuiteRunsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use StartSuiteRun\StartSuiteRunTrait;
    use StopSuiteRun\StopSuiteRunTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateSuiteDefinition\UpdateSuiteDefinitionTrait;
    use GetDeviceAdvisorEndpoint\GetDeviceAdvisorEndpointTrait;
}
