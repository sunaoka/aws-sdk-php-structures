<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\DescribeTermsByClient;

trait DescribeTermsByClientTrait
{
    /**
     * @param DescribeTermsByClientRequest $args
     * @return DescribeTermsByClientResponse
     */
    public function describeTermsByClient(DescribeTermsByClientRequest $args)
    {
        $result = parent::describeTermsByClient($args->toArray());
        return new DescribeTermsByClientResponse($result->toArray());
    }
}
