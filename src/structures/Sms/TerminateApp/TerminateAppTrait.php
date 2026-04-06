<?php

namespace Sunaoka\Aws\Structures\Sms\TerminateApp;

trait TerminateAppTrait
{
    /**
     * @param TerminateAppRequest $args
     * @return TerminateAppResponse
     */
    public function terminateApp(TerminateAppRequest $args)
    {
        $result = parent::terminateApp($args->toArray());
        return new TerminateAppResponse($result->toArray());
    }
}
