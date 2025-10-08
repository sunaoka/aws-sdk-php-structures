<?php

namespace Sunaoka\Aws\Structures\CostandUsageReportService\DescribeReportDefinitions;

trait DescribeReportDefinitionsTrait
{
    /**
     * @param DescribeReportDefinitionsRequest $args
     * @return DescribeReportDefinitionsResponse
     */
    public function describeReportDefinitions(DescribeReportDefinitionsRequest $args)
    {
        $result = parent::describeReportDefinitions($args->toArray());
        return new DescribeReportDefinitionsResponse($result->toArray());
    }
}
