<?php

namespace Sunaoka\Aws\Structures\Iot\GetPercentiles;

trait GetPercentilesTrait
{
    /**
     * @param GetPercentilesRequest $args
     * @return GetPercentilesResponse
     */
    public function getPercentiles(GetPercentilesRequest $args)
    {
        $result = parent::getPercentiles($args->toArray());
        return new GetPercentilesResponse($result->toArray());
    }
}
