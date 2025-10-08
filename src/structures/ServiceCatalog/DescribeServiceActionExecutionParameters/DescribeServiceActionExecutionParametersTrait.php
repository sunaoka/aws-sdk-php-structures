<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DescribeServiceActionExecutionParameters;

trait DescribeServiceActionExecutionParametersTrait
{
    /**
     * @param DescribeServiceActionExecutionParametersRequest $args
     * @return DescribeServiceActionExecutionParametersResponse
     */
    public function describeServiceActionExecutionParameters(DescribeServiceActionExecutionParametersRequest $args)
    {
        $result = parent::describeServiceActionExecutionParameters($args->toArray());
        return new DescribeServiceActionExecutionParametersResponse($result->toArray());
    }
}
