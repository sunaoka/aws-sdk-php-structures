<?php

namespace Sunaoka\Aws\Structures\Acm\ListAcmeExternalAccountBindings;

trait ListAcmeExternalAccountBindingsTrait
{
    /**
     * @param ListAcmeExternalAccountBindingsRequest $args
     * @return ListAcmeExternalAccountBindingsResponse
     */
    public function listAcmeExternalAccountBindings(ListAcmeExternalAccountBindingsRequest $args)
    {
        $result = parent::listAcmeExternalAccountBindings($args->toArray());
        return new ListAcmeExternalAccountBindingsResponse($result->toArray());
    }
}
