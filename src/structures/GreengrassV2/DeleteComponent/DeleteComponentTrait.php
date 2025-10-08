<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\DeleteComponent;

trait DeleteComponentTrait
{
    /**
     * @param DeleteComponentRequest $args
     * @return void
     */
    public function deleteComponent(DeleteComponentRequest $args)
    {
        parent::deleteComponent($args->toArray());
    }
}
