<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyImageAttribute;

trait ModifyImageAttributeTrait
{
    /**
     * @param ModifyImageAttributeRequest $args
     * @return void
     */
    public function modifyImageAttribute(ModifyImageAttributeRequest $args)
    {
        parent::modifyImageAttribute($args->toArray());
    }
}
