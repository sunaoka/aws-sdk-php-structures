<?php

namespace Sunaoka\Aws\Structures\MailManager\GetAddonInstance;

trait GetAddonInstanceTrait
{
    /**
     * @param GetAddonInstanceRequest $args
     * @return GetAddonInstanceResponse
     */
    public function getAddonInstance(GetAddonInstanceRequest $args)
    {
        $result = parent::getAddonInstance($args->toArray());
        return new GetAddonInstanceResponse($result->toArray());
    }
}
