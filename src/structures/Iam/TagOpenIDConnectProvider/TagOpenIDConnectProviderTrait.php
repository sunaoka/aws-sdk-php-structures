<?php

namespace Sunaoka\Aws\Structures\Iam\TagOpenIDConnectProvider;

trait TagOpenIDConnectProviderTrait
{
    /**
     * @param TagOpenIDConnectProviderRequest $args
     * @return void
     */
    public function tagOpenIDConnectProvider(TagOpenIDConnectProviderRequest $args)
    {
        parent::tagOpenIDConnectProvider($args->toArray());
    }
}
