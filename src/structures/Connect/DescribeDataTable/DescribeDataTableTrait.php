<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeDataTable;

trait DescribeDataTableTrait
{
    /**
     * @param DescribeDataTableRequest $args
     * @return DescribeDataTableResponse
     */
    public function describeDataTable(DescribeDataTableRequest $args)
    {
        $result = parent::describeDataTable($args->toArray());
        return new DescribeDataTableResponse($result->toArray());
    }
}
