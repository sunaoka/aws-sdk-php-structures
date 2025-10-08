<?php

namespace Sunaoka\Aws\Structures\Ec2\ReleaseAddress;

trait ReleaseAddressTrait
{
    /**
     * @param ReleaseAddressRequest $args
     * @return void
     */
    public function releaseAddress(ReleaseAddressRequest $args)
    {
        parent::releaseAddress($args->toArray());
    }
}
