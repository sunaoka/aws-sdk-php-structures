<?php

namespace Sunaoka\Aws\Structures\ApplicationCostProfiler;

class ApplicationCostProfilerClient extends \Aws\ApplicationCostProfiler\ApplicationCostProfilerClient
{
    use DeleteReportDefinition\DeleteReportDefinitionTrait;
    use GetReportDefinition\GetReportDefinitionTrait;
    use ImportApplicationUsage\ImportApplicationUsageTrait;
    use ListReportDefinitions\ListReportDefinitionsTrait;
    use PutReportDefinition\PutReportDefinitionTrait;
    use UpdateReportDefinition\UpdateReportDefinitionTrait;
}
