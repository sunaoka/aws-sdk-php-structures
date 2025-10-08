<?php

namespace Sunaoka\Aws\Structures\WorkMail\RegisterToWorkMail;

trait RegisterToWorkMailTrait
{
    /**
     * @param RegisterToWorkMailRequest $args
     * @return RegisterToWorkMailResponse
     */
    public function registerToWorkMail(RegisterToWorkMailRequest $args)
    {
        $result = parent::registerToWorkMail($args->toArray());
        return new RegisterToWorkMailResponse($result->toArray());
    }
}
