<?php

namespace Sunaoka\Aws\Structures\drs\PutLaunchAction;

trait PutLaunchActionTrait
{
    /**
     * @param PutLaunchActionRequest $args
     * @return PutLaunchActionResponse
     */
    public function putLaunchAction(PutLaunchActionRequest $args)
    {
        $result = parent::putLaunchAction($args->toArray());
        return new PutLaunchActionResponse($result->toArray());
    }
}
