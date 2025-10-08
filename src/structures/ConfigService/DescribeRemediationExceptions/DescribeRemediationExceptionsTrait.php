<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeRemediationExceptions;

trait DescribeRemediationExceptionsTrait
{
    /**
     * @param DescribeRemediationExceptionsRequest $args
     * @return DescribeRemediationExceptionsResponse
     */
    public function describeRemediationExceptions(DescribeRemediationExceptionsRequest $args)
    {
        $result = parent::describeRemediationExceptions($args->toArray());
        return new DescribeRemediationExceptionsResponse($result->toArray());
    }
}
