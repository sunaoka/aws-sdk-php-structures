<?php

namespace Sunaoka\Aws\Structures\APIPortal\DeleteProductSharingPolicy;

trait DeleteProductSharingPolicyTrait
{
    /**
     * @param DeleteProductSharingPolicyRequest $args
     * @return void
     */
    public function deleteProductSharingPolicy(DeleteProductSharingPolicyRequest $args)
    {
        parent::deleteProductSharingPolicy($args->toArray());
    }
}
