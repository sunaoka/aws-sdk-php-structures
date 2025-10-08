<?php

namespace Sunaoka\Aws\Structures\Backup\DeleteFramework;

trait DeleteFrameworkTrait
{
    /**
     * @param DeleteFrameworkRequest $args
     * @return void
     */
    public function deleteFramework(DeleteFrameworkRequest $args)
    {
        parent::deleteFramework($args->toArray());
    }
}
