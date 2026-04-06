<?php

namespace Sunaoka\Aws\Structures\Transfer\DeleteWebApp;

trait DeleteWebAppTrait
{
    /**
     * @param DeleteWebAppRequest $args
     * @return void
     */
    public function deleteWebApp(DeleteWebAppRequest $args)
    {
        parent::deleteWebApp($args->toArray());
    }
}
