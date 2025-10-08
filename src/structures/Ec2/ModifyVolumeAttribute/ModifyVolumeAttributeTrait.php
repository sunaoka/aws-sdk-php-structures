<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVolumeAttribute;

trait ModifyVolumeAttributeTrait
{
    /**
     * @param ModifyVolumeAttributeRequest $args
     * @return void
     */
    public function modifyVolumeAttribute(ModifyVolumeAttributeRequest $args)
    {
        parent::modifyVolumeAttribute($args->toArray());
    }
}
