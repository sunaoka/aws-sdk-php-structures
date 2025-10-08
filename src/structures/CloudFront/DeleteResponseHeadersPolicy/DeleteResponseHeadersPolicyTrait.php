<?php

namespace Sunaoka\Aws\Structures\CloudFront\DeleteResponseHeadersPolicy;

trait DeleteResponseHeadersPolicyTrait
{
    /**
     * @param DeleteResponseHeadersPolicyRequest $args
     * @return void
     */
    public function deleteResponseHeadersPolicy(DeleteResponseHeadersPolicyRequest $args)
    {
        parent::deleteResponseHeadersPolicy($args->toArray());
    }
}
