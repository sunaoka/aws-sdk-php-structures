<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals;

class ApplicationSignalsClient extends \Aws\ApplicationSignals\ApplicationSignalsClient
{
    use BatchGetServiceLevelObjectiveBudgetReport\BatchGetServiceLevelObjectiveBudgetReportTrait;
    use CreateServiceLevelObjective\CreateServiceLevelObjectiveTrait;
    use DeleteServiceLevelObjective\DeleteServiceLevelObjectiveTrait;
    use GetService\GetServiceTrait;
    use GetServiceLevelObjective\GetServiceLevelObjectiveTrait;
    use ListServiceDependencies\ListServiceDependenciesTrait;
    use ListServiceDependents\ListServiceDependentsTrait;
    use ListServiceLevelObjectives\ListServiceLevelObjectivesTrait;
    use ListServiceOperations\ListServiceOperationsTrait;
    use ListServices\ListServicesTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use StartDiscovery\StartDiscoveryTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateServiceLevelObjective\UpdateServiceLevelObjectiveTrait;
}
