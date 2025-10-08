<?php

namespace Sunaoka\Aws\Structures\Organizations\DisableAWSServiceAccess;

trait DisableAWSServiceAccessTrait
{
    /**
     * @param DisableAWSServiceAccessRequest $args
     * @return void
     */
    public function disableAWSServiceAccess(DisableAWSServiceAccessRequest $args)
    {
        parent::disableAWSServiceAccess($args->toArray());
    }
}
