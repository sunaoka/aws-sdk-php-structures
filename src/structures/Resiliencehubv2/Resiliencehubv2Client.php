<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2;

class Resiliencehubv2Client extends \Aws\Resiliencehubv2\Resiliencehubv2Client
{
    use CreateAssertion\CreateAssertionTrait;
    use CreateInputSource\CreateInputSourceTrait;
    use CreatePolicy\CreatePolicyTrait;
    use CreateReport\CreateReportTrait;
    use CreateService\CreateServiceTrait;
    use CreateServiceFunction\CreateServiceFunctionTrait;
    use CreateServiceFunctionResources\CreateServiceFunctionResourcesTrait;
    use CreateSystem\CreateSystemTrait;
    use CreateUserJourney\CreateUserJourneyTrait;
    use DeleteAssertion\DeleteAssertionTrait;
    use DeleteInputSource\DeleteInputSourceTrait;
    use DeletePolicy\DeletePolicyTrait;
    use DeleteService\DeleteServiceTrait;
    use DeleteServiceFunction\DeleteServiceFunctionTrait;
    use DeleteServiceFunctionResources\DeleteServiceFunctionResourcesTrait;
    use DeleteSystem\DeleteSystemTrait;
    use DeleteUserJourney\DeleteUserJourneyTrait;
    use GetFailureModeFinding\GetFailureModeFindingTrait;
    use GetPolicy\GetPolicyTrait;
    use GetService\GetServiceTrait;
    use GetSystem\GetSystemTrait;
    use GetUserJourney\GetUserJourneyTrait;
    use ImportApp\ImportAppTrait;
    use ImportPolicy\ImportPolicyTrait;
    use ListAssertions\ListAssertionsTrait;
    use ListDependencies\ListDependenciesTrait;
    use ListFailureModeAssessments\ListFailureModeAssessmentsTrait;
    use ListFailureModeFindings\ListFailureModeFindingsTrait;
    use ListInputSources\ListInputSourcesTrait;
    use ListPolicies\ListPoliciesTrait;
    use ListReports\ListReportsTrait;
    use ListResources\ListResourcesTrait;
    use ListServiceEvents\ListServiceEventsTrait;
    use ListServiceFunctions\ListServiceFunctionsTrait;
    use ListServiceTopologyEdges\ListServiceTopologyEdgesTrait;
    use ListServices\ListServicesTrait;
    use ListSystemEvents\ListSystemEventsTrait;
    use ListSystems\ListSystemsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ListUserJourneys\ListUserJourneysTrait;
    use StartFailureModeAssessment\StartFailureModeAssessmentTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateAssertion\UpdateAssertionTrait;
    use UpdateDependency\UpdateDependencyTrait;
    use UpdateFailureModeFinding\UpdateFailureModeFindingTrait;
    use UpdatePolicy\UpdatePolicyTrait;
    use UpdateService\UpdateServiceTrait;
    use UpdateServiceFunction\UpdateServiceFunctionTrait;
    use UpdateSystem\UpdateSystemTrait;
    use UpdateUserJourney\UpdateUserJourneyTrait;
}
