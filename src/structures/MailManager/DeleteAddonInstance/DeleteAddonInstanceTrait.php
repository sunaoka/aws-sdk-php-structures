<?php

namespace Sunaoka\Aws\Structures\MailManager\DeleteAddonInstance;

trait DeleteAddonInstanceTrait
{
    /**
     * @param DeleteAddonInstanceRequest $args
     * @return DeleteAddonInstanceResponse
     */
    public function deleteAddonInstance(DeleteAddonInstanceRequest $args)
    {
        $result = parent::deleteAddonInstance($args->toArray());
        return new DeleteAddonInstanceResponse($result->toArray());
    }
}
