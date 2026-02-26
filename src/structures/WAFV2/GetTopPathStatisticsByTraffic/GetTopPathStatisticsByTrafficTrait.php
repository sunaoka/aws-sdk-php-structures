<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetTopPathStatisticsByTraffic;

trait GetTopPathStatisticsByTrafficTrait
{
    /**
     * @param GetTopPathStatisticsByTrafficRequest $args
     * @return GetTopPathStatisticsByTrafficResponse
     */
    public function getTopPathStatisticsByTraffic(GetTopPathStatisticsByTrafficRequest $args)
    {
        $result = parent::getTopPathStatisticsByTraffic($args->toArray());
        return new GetTopPathStatisticsByTrafficResponse($result->toArray());
    }
}
