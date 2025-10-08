<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyInstanceAttribute;

trait ModifyInstanceAttributeTrait
{
    /**
     * @param ModifyInstanceAttributeRequest $args
     * @return void
     */
    public function modifyInstanceAttribute(ModifyInstanceAttributeRequest $args)
    {
        parent::modifyInstanceAttribute($args->toArray());
    }
}
