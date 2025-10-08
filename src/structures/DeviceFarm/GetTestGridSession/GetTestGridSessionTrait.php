<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\GetTestGridSession;

trait GetTestGridSessionTrait
{
    /**
     * @param GetTestGridSessionRequest $args
     * @return GetTestGridSessionResponse
     */
    public function getTestGridSession(GetTestGridSessionRequest $args)
    {
        $result = parent::getTestGridSession($args->toArray());
        return new GetTestGridSessionResponse($result->toArray());
    }
}
