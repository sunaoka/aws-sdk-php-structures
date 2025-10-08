<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteVerifiedAccessInstance;

trait DeleteVerifiedAccessInstanceTrait
{
    /**
     * @param DeleteVerifiedAccessInstanceRequest $args
     * @return DeleteVerifiedAccessInstanceResponse
     */
    public function deleteVerifiedAccessInstance(DeleteVerifiedAccessInstanceRequest $args)
    {
        $result = parent::deleteVerifiedAccessInstance($args->toArray());
        return new DeleteVerifiedAccessInstanceResponse($result->toArray());
    }
}
