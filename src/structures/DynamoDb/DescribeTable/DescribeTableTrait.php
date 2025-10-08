<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DescribeTable;

trait DescribeTableTrait
{
    /**
     * @param DescribeTableRequest $args
     * @return DescribeTableResponse
     */
    public function describeTable(DescribeTableRequest $args)
    {
        $result = parent::describeTable($args->toArray());
        return new DescribeTableResponse($result->toArray());
    }
}
