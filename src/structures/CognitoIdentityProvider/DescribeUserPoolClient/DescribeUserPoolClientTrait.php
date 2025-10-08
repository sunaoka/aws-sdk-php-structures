<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\DescribeUserPoolClient;

trait DescribeUserPoolClientTrait
{
    /**
     * @param DescribeUserPoolClientRequest $args
     * @return DescribeUserPoolClientResponse
     */
    public function describeUserPoolClient(DescribeUserPoolClientRequest $args)
    {
        $result = parent::describeUserPoolClient($args->toArray());
        return new DescribeUserPoolClientResponse($result->toArray());
    }
}
