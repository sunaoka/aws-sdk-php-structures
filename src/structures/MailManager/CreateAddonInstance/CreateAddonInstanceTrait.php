<?php

namespace Sunaoka\Aws\Structures\MailManager\CreateAddonInstance;

trait CreateAddonInstanceTrait
{
    /**
     * @param CreateAddonInstanceRequest $args
     * @return CreateAddonInstanceResponse
     */
    public function createAddonInstance(CreateAddonInstanceRequest $args)
    {
        $result = parent::createAddonInstance($args->toArray());
        return new CreateAddonInstanceResponse($result->toArray());
    }
}
