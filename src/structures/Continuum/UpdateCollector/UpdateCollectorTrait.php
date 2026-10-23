<?php

namespace Sunaoka\Aws\Structures\Continuum\UpdateCollector;

trait UpdateCollectorTrait
{
    /**
     * @param UpdateCollectorRequest $args
     * @return UpdateCollectorResponse
     */
    public function updateCollector(UpdateCollectorRequest $args)
    {
        $result = parent::updateCollector($args->toArray());
        return new UpdateCollectorResponse($result->toArray());
    }
}
