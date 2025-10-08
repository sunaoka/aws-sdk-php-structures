<?php

namespace Sunaoka\Aws\Structures\Iam\UntagSAMLProvider;

trait UntagSAMLProviderTrait
{
    /**
     * @param UntagSAMLProviderRequest $args
     * @return void
     */
    public function untagSAMLProvider(UntagSAMLProviderRequest $args)
    {
        parent::untagSAMLProvider($args->toArray());
    }
}
