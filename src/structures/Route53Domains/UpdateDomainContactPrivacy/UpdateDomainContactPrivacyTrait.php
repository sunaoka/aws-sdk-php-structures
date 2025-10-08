<?php

namespace Sunaoka\Aws\Structures\Route53Domains\UpdateDomainContactPrivacy;

trait UpdateDomainContactPrivacyTrait
{
    /**
     * @param UpdateDomainContactPrivacyRequest $args
     * @return UpdateDomainContactPrivacyResponse
     */
    public function updateDomainContactPrivacy(UpdateDomainContactPrivacyRequest $args)
    {
        $result = parent::updateDomainContactPrivacy($args->toArray());
        return new UpdateDomainContactPrivacyResponse($result->toArray());
    }
}
