<?php

namespace Sunaoka\Aws\Structures\AppRunner\PauseService;

trait PauseServiceTrait
{
    /**
     * @param PauseServiceRequest $args
     * @return PauseServiceResponse
     */
    public function pauseService(PauseServiceRequest $args)
    {
        $result = parent::pauseService($args->toArray());
        return new PauseServiceResponse($result->toArray());
    }
}
