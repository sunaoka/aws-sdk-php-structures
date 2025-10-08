<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteSpace;

trait DeleteSpaceTrait
{
    /**
     * @param DeleteSpaceRequest $args
     * @return void
     */
    public function deleteSpace(DeleteSpaceRequest $args)
    {
        parent::deleteSpace($args->toArray());
    }
}
