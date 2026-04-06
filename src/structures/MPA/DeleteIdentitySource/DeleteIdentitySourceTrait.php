<?php

namespace Sunaoka\Aws\Structures\MPA\DeleteIdentitySource;

trait DeleteIdentitySourceTrait
{
    /**
     * @param DeleteIdentitySourceRequest $args
     * @return void
     */
    public function deleteIdentitySource(DeleteIdentitySourceRequest $args)
    {
        parent::deleteIdentitySource($args->toArray());
    }
}
