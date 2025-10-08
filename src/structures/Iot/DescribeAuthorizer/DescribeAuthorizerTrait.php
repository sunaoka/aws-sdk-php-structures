<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeAuthorizer;

trait DescribeAuthorizerTrait
{
    /**
     * @param DescribeAuthorizerRequest $args
     * @return DescribeAuthorizerResponse
     */
    public function describeAuthorizer(DescribeAuthorizerRequest $args)
    {
        $result = parent::describeAuthorizer($args->toArray());
        return new DescribeAuthorizerResponse($result->toArray());
    }
}
