<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals;

class ApplicationSignalsClient extends \Aws\ApplicationSignals\ApplicationSignalsClient
{
    use BatchGetServiceLevelObjectiveBudgetReport\BatchGetServiceLevelObjectiveBudgetReportTrait;
    use BatchUpdateExclusionWindows\BatchUpdateExclusionWindowsTrait;
    use CreateServiceLevelObjective\CreateServiceLevelObjectiveTrait;
    use DeleteGroupingConfiguration\DeleteGroupingConfigurationTrait;
    use DeleteServiceLevelObjective\DeleteServiceLevelObjectiveTrait;
    use GetService\GetServiceTrait;
    use GetServiceLevelObjective\GetServiceLevelObjectiveTrait;
    use ListAuditFindings\ListAuditFindingsTrait;
    use ListGroupingAttributeDefinitions\ListGroupingAttributeDefinitionsTrait;
    use ListServiceDependencies\ListServiceDependenciesTrait;
    use ListServiceDependents\ListServiceDependentsTrait;
    use ListServiceLevelObjectiveExclusionWindows\ListServiceLevelObjectiveExclusionWindowsTrait;
    use ListServiceLevelObjectives\ListServiceLevelObjectivesTrait;
    use ListServiceOperations\ListServiceOperationsTrait;
    use ListServiceStates\ListServiceStatesTrait;
    use ListServices\ListServicesTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use PutGroupingConfiguration\PutGroupingConfigurationTrait;
    use StartDiscovery\StartDiscoveryTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateServiceLevelObjective\UpdateServiceLevelObjectiveTrait;
}
