<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\CreateDomainName;

trait CreateDomainNameTrait
{
    /**
     * @param CreateDomainNameRequest $args
     * @return CreateDomainNameResponse
     */
    public function createDomainName(CreateDomainNameRequest $args)
    {
        $result = parent::createDomainName($args->toArray());
        return new CreateDomainNameResponse($result->toArray());
    }
}
