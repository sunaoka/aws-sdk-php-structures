<?php

namespace Sunaoka\Aws\Structures\FSx\DescribeFileSystemAliases;

trait DescribeFileSystemAliasesTrait
{
    /**
     * @param DescribeFileSystemAliasesRequest $args
     * @return DescribeFileSystemAliasesResponse
     */
    public function describeFileSystemAliases(DescribeFileSystemAliasesRequest $args)
    {
        $result = parent::describeFileSystemAliases($args->toArray());
        return new DescribeFileSystemAliasesResponse($result->toArray());
    }
}
