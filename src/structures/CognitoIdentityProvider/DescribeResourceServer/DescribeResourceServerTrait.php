<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\DescribeResourceServer;

trait DescribeResourceServerTrait
{
    /**
     * @param DescribeResourceServerRequest $args
     * @return DescribeResourceServerResponse
     */
    public function describeResourceServer(DescribeResourceServerRequest $args)
    {
        $result = parent::describeResourceServer($args->toArray());
        return new DescribeResourceServerResponse($result->toArray());
    }
}
