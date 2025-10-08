<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DescribeImport;

trait DescribeImportTrait
{
    /**
     * @param DescribeImportRequest $args
     * @return DescribeImportResponse
     */
    public function describeImport(DescribeImportRequest $args)
    {
        $result = parent::describeImport($args->toArray());
        return new DescribeImportResponse($result->toArray());
    }
}
