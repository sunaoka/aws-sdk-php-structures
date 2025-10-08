<?php

namespace Sunaoka\Aws\Structures\Translate\GetTerminology;

trait GetTerminologyTrait
{
    /**
     * @param GetTerminologyRequest $args
     * @return GetTerminologyResponse
     */
    public function getTerminology(GetTerminologyRequest $args)
    {
        $result = parent::getTerminology($args->toArray());
        return new GetTerminologyResponse($result->toArray());
    }
}
