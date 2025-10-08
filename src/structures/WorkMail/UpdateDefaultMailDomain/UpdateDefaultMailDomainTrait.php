<?php

namespace Sunaoka\Aws\Structures\WorkMail\UpdateDefaultMailDomain;

trait UpdateDefaultMailDomainTrait
{
    /**
     * @param UpdateDefaultMailDomainRequest $args
     * @return UpdateDefaultMailDomainResponse
     */
    public function updateDefaultMailDomain(UpdateDefaultMailDomainRequest $args)
    {
        $result = parent::updateDefaultMailDomain($args->toArray());
        return new UpdateDefaultMailDomainResponse($result->toArray());
    }
}
