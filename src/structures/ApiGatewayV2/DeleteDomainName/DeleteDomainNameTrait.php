<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\DeleteDomainName;

trait DeleteDomainNameTrait
{
    /**
     * @param DeleteDomainNameRequest $args
     * @return void
     */
    public function deleteDomainName(DeleteDomainNameRequest $args)
    {
        parent::deleteDomainName($args->toArray());
    }
}
