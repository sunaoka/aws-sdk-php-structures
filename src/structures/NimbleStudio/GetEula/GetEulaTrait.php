<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\GetEula;

trait GetEulaTrait
{
    /**
     * @param GetEulaRequest $args
     * @return GetEulaResponse
     */
    public function getEula(GetEulaRequest $args)
    {
        $result = parent::getEula($args->toArray());
        return new GetEulaResponse($result->toArray());
    }
}
