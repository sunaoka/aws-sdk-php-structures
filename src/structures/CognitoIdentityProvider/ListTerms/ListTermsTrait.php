<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\ListTerms;

trait ListTermsTrait
{
    /**
     * @param ListTermsRequest $args
     * @return ListTermsResponse
     */
    public function listTerms(ListTermsRequest $args)
    {
        $result = parent::listTerms($args->toArray());
        return new ListTermsResponse($result->toArray());
    }
}
