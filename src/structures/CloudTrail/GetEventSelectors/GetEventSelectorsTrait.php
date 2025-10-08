<?php

namespace Sunaoka\Aws\Structures\CloudTrail\GetEventSelectors;

trait GetEventSelectorsTrait
{
    /**
     * @param GetEventSelectorsRequest $args
     * @return GetEventSelectorsResponse
     */
    public function getEventSelectors(GetEventSelectorsRequest $args)
    {
        $result = parent::getEventSelectors($args->toArray());
        return new GetEventSelectorsResponse($result->toArray());
    }
}
