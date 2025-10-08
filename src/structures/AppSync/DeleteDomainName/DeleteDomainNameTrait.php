<?php

namespace Sunaoka\Aws\Structures\AppSync\DeleteDomainName;

trait DeleteDomainNameTrait
{
    /**
     * @param DeleteDomainNameRequest $args
     * @return DeleteDomainNameResponse
     */
    public function deleteDomainName(DeleteDomainNameRequest $args)
    {
        $result = parent::deleteDomainName($args->toArray());
        return new DeleteDomainNameResponse($result->toArray());
    }
}
