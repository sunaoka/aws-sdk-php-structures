<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeDefaultAuthorizer;

trait DescribeDefaultAuthorizerTrait
{
    /**
     * @param DescribeDefaultAuthorizerRequest $args
     * @return DescribeDefaultAuthorizerResponse
     */
    public function describeDefaultAuthorizer(DescribeDefaultAuthorizerRequest $args)
    {
        $result = parent::describeDefaultAuthorizer($args->toArray());
        return new DescribeDefaultAuthorizerResponse($result->toArray());
    }
}
