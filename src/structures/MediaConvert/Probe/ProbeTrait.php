<?php

namespace Sunaoka\Aws\Structures\MediaConvert\Probe;

trait ProbeTrait
{
    /**
     * @param ProbeRequest $args
     * @return ProbeResponse
     */
    public function probe(ProbeRequest $args)
    {
        $result = parent::probe($args->toArray());
        return new ProbeResponse($result->toArray());
    }
}
