<?php

namespace Sunaoka\Aws\Structures\CloudFront\AssociateAlias;

trait AssociateAliasTrait
{
    /**
     * @param AssociateAliasRequest $args
     * @return void
     */
    public function associateAlias(AssociateAliasRequest $args)
    {
        parent::associateAlias($args->toArray());
    }
}
