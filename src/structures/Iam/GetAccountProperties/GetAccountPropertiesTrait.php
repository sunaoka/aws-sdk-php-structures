<?php

namespace Sunaoka\Aws\Structures\Iam\GetAccountProperties;

trait GetAccountPropertiesTrait
{
    /**
     * @param GetAccountPropertiesRequest $args
     * @return GetAccountPropertiesResponse
     */
    public function getAccountProperties(GetAccountPropertiesRequest $args)
    {
        $result = parent::getAccountProperties($args->toArray());
        return new GetAccountPropertiesResponse($result->toArray());
    }
}
