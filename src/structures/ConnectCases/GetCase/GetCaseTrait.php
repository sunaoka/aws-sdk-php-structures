<?php

namespace Sunaoka\Aws\Structures\ConnectCases\GetCase;

trait GetCaseTrait
{
    /**
     * @param GetCaseRequest $args
     * @return GetCaseResponse
     */
    public function getCase(GetCaseRequest $args)
    {
        $result = parent::getCase($args->toArray());
        return new GetCaseResponse($result->toArray());
    }
}
