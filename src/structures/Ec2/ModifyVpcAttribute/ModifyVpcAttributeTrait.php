<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVpcAttribute;

trait ModifyVpcAttributeTrait
{
    /**
     * @param ModifyVpcAttributeRequest $args
     * @return void
     */
    public function modifyVpcAttribute(ModifyVpcAttributeRequest $args)
    {
        parent::modifyVpcAttribute($args->toArray());
    }
}
