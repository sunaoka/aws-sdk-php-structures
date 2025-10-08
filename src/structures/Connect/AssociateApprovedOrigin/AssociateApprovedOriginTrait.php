<?php

namespace Sunaoka\Aws\Structures\Connect\AssociateApprovedOrigin;

trait AssociateApprovedOriginTrait
{
    /**
     * @param AssociateApprovedOriginRequest $args
     * @return void
     */
    public function associateApprovedOrigin(AssociateApprovedOriginRequest $args)
    {
        parent::associateApprovedOrigin($args->toArray());
    }
}
