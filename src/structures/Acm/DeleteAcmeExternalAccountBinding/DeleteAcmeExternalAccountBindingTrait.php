<?php

namespace Sunaoka\Aws\Structures\Acm\DeleteAcmeExternalAccountBinding;

trait DeleteAcmeExternalAccountBindingTrait
{
    /**
     * @param DeleteAcmeExternalAccountBindingRequest $args
     * @return void
     */
    public function deleteAcmeExternalAccountBinding(DeleteAcmeExternalAccountBindingRequest $args)
    {
        parent::deleteAcmeExternalAccountBinding($args->toArray());
    }
}
