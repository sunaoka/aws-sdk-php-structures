<?php

namespace Sunaoka\Aws\Structures\Kms\RetireGrant;

trait RetireGrantTrait
{
    /**
     * @param RetireGrantRequest $args
     * @return void
     */
    public function retireGrant(RetireGrantRequest $args)
    {
        parent::retireGrant($args->toArray());
    }
}
