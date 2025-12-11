<?php

namespace Sunaoka\Aws\Structures\Odb\AssociateIamRoleToResource;

trait AssociateIamRoleToResourceTrait
{
    /**
     * @param AssociateIamRoleToResourceRequest $args
     * @return AssociateIamRoleToResourceResponse
     */
    public function associateIamRoleToResource(AssociateIamRoleToResourceRequest $args)
    {
        $result = parent::associateIamRoleToResource($args->toArray());
        return new AssociateIamRoleToResourceResponse($result->toArray());
    }
}
