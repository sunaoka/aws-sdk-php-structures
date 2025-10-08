<?php

namespace Sunaoka\Aws\Structures\RedshiftDataAPIService\DescribeStatement;

trait DescribeStatementTrait
{
    /**
     * @param DescribeStatementRequest $args
     * @return DescribeStatementResponse
     */
    public function describeStatement(DescribeStatementRequest $args)
    {
        $result = parent::describeStatement($args->toArray());
        return new DescribeStatementResponse($result->toArray());
    }
}
