<?php

namespace Sunaoka\Aws\Structures\AppConfig\DeleteExtension;

trait DeleteExtensionTrait
{
    /**
     * @param DeleteExtensionRequest $args
     * @return void
     */
    public function deleteExtension(DeleteExtensionRequest $args)
    {
        parent::deleteExtension($args->toArray());
    }
}
