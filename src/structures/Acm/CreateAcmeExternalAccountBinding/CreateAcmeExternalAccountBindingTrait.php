<?php

namespace Sunaoka\Aws\Structures\Acm\CreateAcmeExternalAccountBinding;

trait CreateAcmeExternalAccountBindingTrait
{
    /**
     * @param CreateAcmeExternalAccountBindingRequest $args
     * @return CreateAcmeExternalAccountBindingResponse
     */
    public function createAcmeExternalAccountBinding(CreateAcmeExternalAccountBindingRequest $args)
    {
        $result = parent::createAcmeExternalAccountBinding($args->toArray());
        return new CreateAcmeExternalAccountBindingResponse($result->toArray());
    }
}
