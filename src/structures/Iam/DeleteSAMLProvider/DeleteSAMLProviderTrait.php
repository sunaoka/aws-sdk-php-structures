<?php

namespace Sunaoka\Aws\Structures\Iam\DeleteSAMLProvider;

trait DeleteSAMLProviderTrait
{
    /**
     * @param DeleteSAMLProviderRequest $args
     * @return void
     */
    public function deleteSAMLProvider(DeleteSAMLProviderRequest $args)
    {
        parent::deleteSAMLProvider($args->toArray());
    }
}
