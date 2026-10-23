<?php

namespace Sunaoka\Aws\Structures\Continuum\CreateCollector;

trait CreateCollectorTrait
{
    /**
     * @param CreateCollectorRequest $args
     * @return CreateCollectorResponse
     */
    public function createCollector(CreateCollectorRequest $args)
    {
        $result = parent::createCollector($args->toArray());
        return new CreateCollectorResponse($result->toArray());
    }
}
