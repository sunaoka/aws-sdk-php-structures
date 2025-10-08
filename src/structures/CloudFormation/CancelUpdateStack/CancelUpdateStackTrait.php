<?php

namespace Sunaoka\Aws\Structures\CloudFormation\CancelUpdateStack;

trait CancelUpdateStackTrait
{
    /**
     * @param CancelUpdateStackRequest $args
     * @return void
     */
    public function cancelUpdateStack(CancelUpdateStackRequest $args)
    {
        parent::cancelUpdateStack($args->toArray());
    }
}
