<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\UpdateTerms;

trait UpdateTermsTrait
{
    /**
     * @param UpdateTermsRequest $args
     * @return UpdateTermsResponse
     */
    public function updateTerms(UpdateTermsRequest $args)
    {
        $result = parent::updateTerms($args->toArray());
        return new UpdateTermsResponse($result->toArray());
    }
}
