<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\UpdateIdentitySource;

trait UpdateIdentitySourceTrait
{
    /**
     * @param UpdateIdentitySourceRequest $args
     * @return UpdateIdentitySourceResponse
     */
    public function updateIdentitySource(UpdateIdentitySourceRequest $args)
    {
        $result = parent::updateIdentitySource($args->toArray());
        return new UpdateIdentitySourceResponse($result->toArray());
    }
}
