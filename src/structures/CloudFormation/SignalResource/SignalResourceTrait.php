<?php

namespace Sunaoka\Aws\Structures\CloudFormation\SignalResource;

trait SignalResourceTrait
{
    /**
     * @param SignalResourceRequest $args
     * @return void
     */
    public function signalResource(SignalResourceRequest $args)
    {
        parent::signalResource($args->toArray());
    }
}
