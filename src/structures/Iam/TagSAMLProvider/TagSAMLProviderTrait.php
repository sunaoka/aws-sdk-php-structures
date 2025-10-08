<?php

namespace Sunaoka\Aws\Structures\Iam\TagSAMLProvider;

trait TagSAMLProviderTrait
{
    /**
     * @param TagSAMLProviderRequest $args
     * @return void
     */
    public function tagSAMLProvider(TagSAMLProviderRequest $args)
    {
        parent::tagSAMLProvider($args->toArray());
    }
}
