<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\GetCSVHeader;

trait GetCSVHeaderTrait
{
    /**
     * @param GetCSVHeaderRequest $args
     * @return GetCSVHeaderResponse
     */
    public function getCSVHeader(GetCSVHeaderRequest $args)
    {
        $result = parent::getCSVHeader($args->toArray());
        return new GetCSVHeaderResponse($result->toArray());
    }
}
