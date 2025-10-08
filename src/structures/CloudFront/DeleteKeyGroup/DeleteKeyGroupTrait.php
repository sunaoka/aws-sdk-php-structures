<?php

namespace Sunaoka\Aws\Structures\CloudFront\DeleteKeyGroup;

trait DeleteKeyGroupTrait
{
    /**
     * @param DeleteKeyGroupRequest $args
     * @return void
     */
    public function deleteKeyGroup(DeleteKeyGroupRequest $args)
    {
        parent::deleteKeyGroup($args->toArray());
    }
}
