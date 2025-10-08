<?php

namespace Sunaoka\Aws\Structures\ForecastService\StopResource;

trait StopResourceTrait
{
    /**
     * @param StopResourceRequest $args
     * @return void
     */
    public function stopResource(StopResourceRequest $args)
    {
        parent::stopResource($args->toArray());
    }
}
