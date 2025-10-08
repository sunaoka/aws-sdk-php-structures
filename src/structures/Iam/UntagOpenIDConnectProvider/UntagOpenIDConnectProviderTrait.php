<?php

namespace Sunaoka\Aws\Structures\Iam\UntagOpenIDConnectProvider;

trait UntagOpenIDConnectProviderTrait
{
    /**
     * @param UntagOpenIDConnectProviderRequest $args
     * @return void
     */
    public function untagOpenIDConnectProvider(UntagOpenIDConnectProviderRequest $args)
    {
        parent::untagOpenIDConnectProvider($args->toArray());
    }
}
