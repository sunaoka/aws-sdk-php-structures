<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DeleteStack;

trait DeleteStackTrait
{
    /**
     * @param DeleteStackRequest $args
     * @return void
     */
    public function deleteStack(DeleteStackRequest $args)
    {
        parent::deleteStack($args->toArray());
    }
}
