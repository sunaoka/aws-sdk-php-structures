<?php

namespace Sunaoka\Aws\Structures\S3Control\AssociateAccessGrantsIdentityCenter;

trait AssociateAccessGrantsIdentityCenterTrait
{
    /**
     * @param AssociateAccessGrantsIdentityCenterRequest $args
     * @return void
     */
    public function associateAccessGrantsIdentityCenter(AssociateAccessGrantsIdentityCenterRequest $args)
    {
        parent::associateAccessGrantsIdentityCenter($args->toArray());
    }
}
