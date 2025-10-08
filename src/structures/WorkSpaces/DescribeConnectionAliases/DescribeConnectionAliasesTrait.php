<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeConnectionAliases;

trait DescribeConnectionAliasesTrait
{
    /**
     * @param DescribeConnectionAliasesRequest $args
     * @return DescribeConnectionAliasesResponse
     */
    public function describeConnectionAliases(DescribeConnectionAliasesRequest $args)
    {
        $result = parent::describeConnectionAliases($args->toArray());
        return new DescribeConnectionAliasesResponse($result->toArray());
    }
}
