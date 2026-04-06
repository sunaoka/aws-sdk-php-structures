<?php

namespace Sunaoka\Aws\Structures\CloudFront\DeleteConnectionGroup;

trait DeleteConnectionGroupTrait
{
    /**
     * @param DeleteConnectionGroupRequest $args
     * @return void
     */
    public function deleteConnectionGroup(DeleteConnectionGroupRequest $args)
    {
        parent::deleteConnectionGroup($args->toArray());
    }
}
