<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\ListSamples;

trait ListSamplesTrait
{
    /**
     * @param ListSamplesRequest $args
     * @return ListSamplesResponse
     */
    public function listSamples(ListSamplesRequest $args)
    {
        $result = parent::listSamples($args->toArray());
        return new ListSamplesResponse($result->toArray());
    }
}
