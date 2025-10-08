<?php

namespace Sunaoka\Aws\Structures\Ec2\EnableVolumeIO;

trait EnableVolumeIOTrait
{
    /**
     * @param EnableVolumeIORequest $args
     * @return void
     */
    public function enableVolumeIO(EnableVolumeIORequest $args)
    {
        parent::enableVolumeIO($args->toArray());
    }
}
