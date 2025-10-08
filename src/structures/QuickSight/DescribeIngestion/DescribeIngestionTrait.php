<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeIngestion;

trait DescribeIngestionTrait
{
    /**
     * @param DescribeIngestionRequest $args
     * @return DescribeIngestionResponse
     */
    public function describeIngestion(DescribeIngestionRequest $args)
    {
        $result = parent::describeIngestion($args->toArray());
        return new DescribeIngestionResponse($result->toArray());
    }
}
