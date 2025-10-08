<?php

namespace Sunaoka\Aws\Structures\CostandUsageReportService;

class CostandUsageReportServiceClient extends \Aws\CostandUsageReportService\CostandUsageReportServiceClient
{
    use DeleteReportDefinition\DeleteReportDefinitionTrait;
    use DescribeReportDefinitions\DescribeReportDefinitionsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ModifyReportDefinition\ModifyReportDefinitionTrait;
    use PutReportDefinition\PutReportDefinitionTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
}
