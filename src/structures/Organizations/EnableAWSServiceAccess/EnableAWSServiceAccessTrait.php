<?php

namespace Sunaoka\Aws\Structures\Organizations\EnableAWSServiceAccess;

trait EnableAWSServiceAccessTrait
{
    /**
     * @param EnableAWSServiceAccessRequest $args
     * @return void
     */
    public function enableAWSServiceAccess(EnableAWSServiceAccessRequest $args)
    {
        parent::enableAWSServiceAccess($args->toArray());
    }
}
