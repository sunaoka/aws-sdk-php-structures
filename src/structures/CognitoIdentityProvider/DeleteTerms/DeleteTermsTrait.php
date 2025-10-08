<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\DeleteTerms;

trait DeleteTermsTrait
{
    /**
     * @param DeleteTermsRequest $args
     * @return void
     */
    public function deleteTerms(DeleteTermsRequest $args)
    {
        parent::deleteTerms($args->toArray());
    }
}
