<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeThemeAlias;

trait DescribeThemeAliasTrait
{
    /**
     * @param DescribeThemeAliasRequest $args
     * @return DescribeThemeAliasResponse
     */
    public function describeThemeAlias(DescribeThemeAliasRequest $args)
    {
        $result = parent::describeThemeAlias($args->toArray());
        return new DescribeThemeAliasResponse($result->toArray());
    }
}
