<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\CreateTerms;

trait CreateTermsTrait
{
    /**
     * @param CreateTermsRequest $args
     * @return CreateTermsResponse
     */
    public function createTerms(CreateTermsRequest $args)
    {
        $result = parent::createTerms($args->toArray());
        return new CreateTermsResponse($result->toArray());
    }
}
