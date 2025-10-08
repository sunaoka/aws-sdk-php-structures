<?php

namespace Sunaoka\Aws\Structures\Iam\UpdateRoleDescription;

trait UpdateRoleDescriptionTrait
{
    /**
     * @param UpdateRoleDescriptionRequest $args
     * @return UpdateRoleDescriptionResponse
     */
    public function updateRoleDescription(UpdateRoleDescriptionRequest $args)
    {
        $result = parent::updateRoleDescription($args->toArray());
        return new UpdateRoleDescriptionResponse($result->toArray());
    }
}
