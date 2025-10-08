<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifySubnetAttribute;

trait ModifySubnetAttributeTrait
{
    /**
     * @param ModifySubnetAttributeRequest $args
     * @return void
     */
    public function modifySubnetAttribute(ModifySubnetAttributeRequest $args)
    {
        parent::modifySubnetAttribute($args->toArray());
    }
}
