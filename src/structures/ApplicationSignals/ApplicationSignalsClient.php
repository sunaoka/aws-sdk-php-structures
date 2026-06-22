<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals;

class ApplicationSignalsClient extends \Aws\ApplicationSignals\ApplicationSignalsClient
{
    use BatchDeleteInstrumentationConfigurations\BatchDeleteInstrumentationConfigurationsTrait;
    use BatchGetServiceLevelObjectiveBudgetReport\BatchGetServiceLevelObjectiveBudgetReportTrait;
    use BatchUpdateExclusionWindows\BatchUpdateExclusionWindowsTrait;
    use CreateInstrumentationConfiguration\CreateInstrumentationConfigurationTrait;
    use CreateServiceLevelObjective\CreateServiceLevelObjectiveTrait;
    use DeleteGroupingConfiguration\DeleteGroupingConfigurationTrait;
    use DeleteInstrumentationConfiguration\DeleteInstrumentationConfigurationTrait;
    use DeleteServiceLevelObjective\DeleteServiceLevelObjectiveTrait;
    use GetInstrumentationConfiguration\GetInstrumentationConfigurationTrait;
    use GetInstrumentationConfigurationStatus\GetInstrumentationConfigurationStatusTrait;
    use GetService\GetServiceTrait;
    use GetServiceLevelObjective\GetServiceLevelObjectiveTrait;
    use ListAuditFindings\ListAuditFindingsTrait;
    use ListEntityEvents\ListEntityEventsTrait;
    use ListGroupingAttributeDefinitions\ListGroupingAttributeDefinitionsTrait;
    use ListInstrumentationConfigurations\ListInstrumentationConfigurationsTrait;
    use ListServiceDependencies\ListServiceDependenciesTrait;
    use ListServiceDependents\ListServiceDependentsTrait;
    use ListServiceLevelObjectiveExclusionWindows\ListServiceLevelObjectiveExclusionWindowsTrait;
    use ListServiceLevelObjectives\ListServiceLevelObjectivesTrait;
    use ListServiceOperations\ListServiceOperationsTrait;
    use ListServiceStates\ListServiceStatesTrait;
    use ListServices\ListServicesTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use PutGroupingConfiguration\PutGroupingConfigurationTrait;
    use ReportInstrumentationConfigurationStatus\ReportInstrumentationConfigurationStatusTrait;
    use StartDiscovery\StartDiscoveryTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateServiceLevelObjective\UpdateServiceLevelObjectiveTrait;
}
