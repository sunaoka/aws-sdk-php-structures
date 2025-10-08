<?php

namespace Sunaoka\Aws\Structures\Kms\RevokeGrant;

trait RevokeGrantTrait
{
    /**
     * @param RevokeGrantRequest $args
     * @return void
     */
    public function revokeGrant(RevokeGrantRequest $args)
    {
        parent::revokeGrant($args->toArray());
    }
}
