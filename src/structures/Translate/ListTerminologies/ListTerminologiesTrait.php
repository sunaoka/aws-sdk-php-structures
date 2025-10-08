<?php

namespace Sunaoka\Aws\Structures\Translate\ListTerminologies;

trait ListTerminologiesTrait
{
    /**
     * @param ListTerminologiesRequest $args
     * @return ListTerminologiesResponse
     */
    public function listTerminologies(ListTerminologiesRequest $args)
    {
        $result = parent::listTerminologies($args->toArray());
        return new ListTerminologiesResponse($result->toArray());
    }
}
