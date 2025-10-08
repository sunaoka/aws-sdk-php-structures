<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateAlias;

trait DescribeTemplateAliasTrait
{
    /**
     * @param DescribeTemplateAliasRequest $args
     * @return DescribeTemplateAliasResponse
     */
    public function describeTemplateAlias(DescribeTemplateAliasRequest $args)
    {
        $result = parent::describeTemplateAlias($args->toArray());
        return new DescribeTemplateAliasResponse($result->toArray());
    }
}
