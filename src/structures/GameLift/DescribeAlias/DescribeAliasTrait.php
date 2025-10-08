<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeAlias;

trait DescribeAliasTrait
{
    /**
     * @param DescribeAliasRequest $args
     * @return DescribeAliasResponse
     */
    public function describeAlias(DescribeAliasRequest $args)
    {
        $result = parent::describeAlias($args->toArray());
        return new DescribeAliasResponse($result->toArray());
    }
}
