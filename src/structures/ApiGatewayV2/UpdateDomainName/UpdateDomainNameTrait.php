<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\UpdateDomainName;

trait UpdateDomainNameTrait
{
    /**
     * @param UpdateDomainNameRequest $args
     * @return UpdateDomainNameResponse
     */
    public function updateDomainName(UpdateDomainNameRequest $args)
    {
        $result = parent::updateDomainName($args->toArray());
        return new UpdateDomainNameResponse($result->toArray());
    }
}
