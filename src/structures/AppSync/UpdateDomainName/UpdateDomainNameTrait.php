<?php

namespace Sunaoka\Aws\Structures\AppSync\UpdateDomainName;

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
