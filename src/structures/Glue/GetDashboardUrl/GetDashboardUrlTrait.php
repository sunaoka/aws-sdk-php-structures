<?php

namespace Sunaoka\Aws\Structures\Glue\GetDashboardUrl;

trait GetDashboardUrlTrait
{
    /**
     * @param GetDashboardUrlRequest $args
     * @return GetDashboardUrlResponse
     */
    public function getDashboardUrl(GetDashboardUrlRequest $args)
    {
        $result = parent::getDashboardUrl($args->toArray());
        return new GetDashboardUrlResponse($result->toArray());
    }
}
