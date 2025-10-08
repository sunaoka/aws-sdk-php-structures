<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTheme;

trait DescribeThemeTrait
{
    /**
     * @param DescribeThemeRequest $args
     * @return DescribeThemeResponse
     */
    public function describeTheme(DescribeThemeRequest $args)
    {
        $result = parent::describeTheme($args->toArray());
        return new DescribeThemeResponse($result->toArray());
    }
}
