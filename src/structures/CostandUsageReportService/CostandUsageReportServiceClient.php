<?php

namespace Sunaoka\Aws\Structures\CostandUsageReportService;

class CostandUsageReportServiceClient extends \Aws\CostandUsageReportService\CostandUsageReportServiceClient
{
    use DeleteReportDefinition\DeleteReportDefinitionTrait;
    use DescribeReportDefinitions\DescribeReportDefinitionsTrait;
    use ModifyReportDefinition\ModifyReportDefinitionTrait;
    use PutReportDefinition\PutReportDefinitionTrait;
}
