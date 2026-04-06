<?php

namespace Sunaoka\Aws\Structures\S3Control\DissociateAccessGrantsIdentityCenter;

trait DissociateAccessGrantsIdentityCenterTrait
{
    /**
     * @param DissociateAccessGrantsIdentityCenterRequest $args
     * @return void
     */
    public function dissociateAccessGrantsIdentityCenter(DissociateAccessGrantsIdentityCenterRequest $args)
    {
        parent::dissociateAccessGrantsIdentityCenter($args->toArray());
    }
}
