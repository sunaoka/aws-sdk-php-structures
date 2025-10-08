<?php

namespace Sunaoka\Aws\Structures\CloudTrail\PutEventSelectors;

trait PutEventSelectorsTrait
{
    /**
     * @param PutEventSelectorsRequest $args
     * @return PutEventSelectorsResponse
     */
    public function putEventSelectors(PutEventSelectorsRequest $args)
    {
        $result = parent::putEventSelectors($args->toArray());
        return new PutEventSelectorsResponse($result->toArray());
    }
}
