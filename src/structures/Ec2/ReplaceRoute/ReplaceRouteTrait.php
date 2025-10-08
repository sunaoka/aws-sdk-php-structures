<?php

namespace Sunaoka\Aws\Structures\Ec2\ReplaceRoute;

trait ReplaceRouteTrait
{
    /**
     * @param ReplaceRouteRequest $args
     * @return void
     */
    public function replaceRoute(ReplaceRouteRequest $args)
    {
        parent::replaceRoute($args->toArray());
    }
}
