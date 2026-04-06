<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\DeleteApplicationGrant;

trait DeleteApplicationGrantTrait
{
    /**
     * @param DeleteApplicationGrantRequest $args
     * @return void
     */
    public function deleteApplicationGrant(DeleteApplicationGrantRequest $args)
    {
        parent::deleteApplicationGrant($args->toArray());
    }
}
