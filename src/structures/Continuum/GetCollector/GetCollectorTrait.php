<?php

namespace Sunaoka\Aws\Structures\Continuum\GetCollector;

trait GetCollectorTrait
{
    /**
     * @param GetCollectorRequest $args
     * @return GetCollectorResponse
     */
    public function getCollector(GetCollectorRequest $args)
    {
        $result = parent::getCollector($args->toArray());
        return new GetCollectorResponse($result->toArray());
    }
}
