<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DescribeExport;

trait DescribeExportTrait
{
    /**
     * @param DescribeExportRequest $args
     * @return DescribeExportResponse
     */
    public function describeExport(DescribeExportRequest $args)
    {
        $result = parent::describeExport($args->toArray());
        return new DescribeExportResponse($result->toArray());
    }
}
