<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DescribeRecord;

trait DescribeRecordTrait
{
    /**
     * @param DescribeRecordRequest $args
     * @return DescribeRecordResponse
     */
    public function describeRecord(DescribeRecordRequest $args)
    {
        $result = parent::describeRecord($args->toArray());
        return new DescribeRecordResponse($result->toArray());
    }
}
