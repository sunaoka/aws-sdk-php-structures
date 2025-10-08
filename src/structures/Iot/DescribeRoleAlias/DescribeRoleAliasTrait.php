<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeRoleAlias;

trait DescribeRoleAliasTrait
{
    /**
     * @param DescribeRoleAliasRequest $args
     * @return DescribeRoleAliasResponse
     */
    public function describeRoleAlias(DescribeRoleAliasRequest $args)
    {
        $result = parent::describeRoleAlias($args->toArray());
        return new DescribeRoleAliasResponse($result->toArray());
    }
}
