<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DescribeGlobalTable;

trait DescribeGlobalTableTrait
{
    /**
     * @param DescribeGlobalTableRequest $args
     * @return DescribeGlobalTableResponse
     */
    public function describeGlobalTable(DescribeGlobalTableRequest $args)
    {
        $result = parent::describeGlobalTable($args->toArray());
        return new DescribeGlobalTableResponse($result->toArray());
    }
}
