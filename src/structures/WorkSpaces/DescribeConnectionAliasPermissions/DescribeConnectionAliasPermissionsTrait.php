<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeConnectionAliasPermissions;

trait DescribeConnectionAliasPermissionsTrait
{
    /**
     * @param DescribeConnectionAliasPermissionsRequest $args
     * @return DescribeConnectionAliasPermissionsResponse
     */
    public function describeConnectionAliasPermissions(DescribeConnectionAliasPermissionsRequest $args)
    {
        $result = parent::describeConnectionAliasPermissions($args->toArray());
        return new DescribeConnectionAliasPermissionsResponse($result->toArray());
    }
}
