<?php

namespace Sunaoka\Aws\Structures\Ec2\DisableVgwRoutePropagation;

trait DisableVgwRoutePropagationTrait
{
    /**
     * @param DisableVgwRoutePropagationRequest $args
     * @return void
     */
    public function disableVgwRoutePropagation(DisableVgwRoutePropagationRequest $args)
    {
        parent::disableVgwRoutePropagation($args->toArray());
    }
}
