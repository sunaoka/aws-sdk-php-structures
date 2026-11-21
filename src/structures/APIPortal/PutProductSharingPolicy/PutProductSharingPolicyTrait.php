<?php

namespace Sunaoka\Aws\Structures\APIPortal\PutProductSharingPolicy;

trait PutProductSharingPolicyTrait
{
    /**
     * @param PutProductSharingPolicyRequest $args
     * @return void
     */
    public function putProductSharingPolicy(PutProductSharingPolicyRequest $args)
    {
        parent::putProductSharingPolicy($args->toArray());
    }
}
