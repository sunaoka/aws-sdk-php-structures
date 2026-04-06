<?php

namespace Sunaoka\Aws\Structures\Ec2\DeregisterImage;

trait DeregisterImageTrait
{
    /**
     * @param DeregisterImageRequest $args
     * @return void
     */
    public function deregisterImage(DeregisterImageRequest $args)
    {
        parent::deregisterImage($args->toArray());
    }
}
