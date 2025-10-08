<?php

namespace Sunaoka\Aws\Structures\Ec2\ResetNetworkInterfaceAttribute;

trait ResetNetworkInterfaceAttributeTrait
{
    /**
     * @param ResetNetworkInterfaceAttributeRequest $args
     * @return void
     */
    public function resetNetworkInterfaceAttribute(ResetNetworkInterfaceAttributeRequest $args)
    {
        parent::resetNetworkInterfaceAttribute($args->toArray());
    }
}
