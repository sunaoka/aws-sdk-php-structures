<?php

namespace Sunaoka\Aws\Structures\CloudFront\DeleteOriginAccessControl;

trait DeleteOriginAccessControlTrait
{
    /**
     * @param DeleteOriginAccessControlRequest $args
     * @return void
     */
    public function deleteOriginAccessControl(DeleteOriginAccessControlRequest $args)
    {
        parent::deleteOriginAccessControl($args->toArray());
    }
}
