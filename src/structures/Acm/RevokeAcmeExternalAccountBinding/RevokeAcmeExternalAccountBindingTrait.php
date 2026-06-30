<?php

namespace Sunaoka\Aws\Structures\Acm\RevokeAcmeExternalAccountBinding;

trait RevokeAcmeExternalAccountBindingTrait
{
    /**
     * @param RevokeAcmeExternalAccountBindingRequest $args
     * @return void
     */
    public function revokeAcmeExternalAccountBinding(RevokeAcmeExternalAccountBindingRequest $args)
    {
        parent::revokeAcmeExternalAccountBinding($args->toArray());
    }
}
