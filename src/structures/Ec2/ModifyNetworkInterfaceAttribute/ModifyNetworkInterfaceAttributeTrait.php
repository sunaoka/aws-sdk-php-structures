<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyNetworkInterfaceAttribute;

trait ModifyNetworkInterfaceAttributeTrait
{
    /**
     * @param ModifyNetworkInterfaceAttributeRequest $args
     * @return void
     */
    public function modifyNetworkInterfaceAttribute(ModifyNetworkInterfaceAttributeRequest $args)
    {
        parent::modifyNetworkInterfaceAttribute($args->toArray());
    }
}
