<?php

namespace Sunaoka\Aws\Structures\CloudFront\DeleteOriginRequestPolicy;

trait DeleteOriginRequestPolicyTrait
{
    /**
     * @param DeleteOriginRequestPolicyRequest $args
     * @return void
     */
    public function deleteOriginRequestPolicy(DeleteOriginRequestPolicyRequest $args)
    {
        parent::deleteOriginRequestPolicy($args->toArray());
    }
}
