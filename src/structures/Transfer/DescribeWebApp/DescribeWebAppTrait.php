<?php

namespace Sunaoka\Aws\Structures\Transfer\DescribeWebApp;

trait DescribeWebAppTrait
{
    /**
     * @param DescribeWebAppRequest $args
     * @return DescribeWebAppResponse
     */
    public function describeWebApp(DescribeWebAppRequest $args)
    {
        $result = parent::describeWebApp($args->toArray());
        return new DescribeWebAppResponse($result->toArray());
    }
}
