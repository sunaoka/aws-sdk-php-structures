<?php

namespace Sunaoka\Aws\Structures\Ec2\EnableVgwRoutePropagation;

trait EnableVgwRoutePropagationTrait
{
    /**
     * @param EnableVgwRoutePropagationRequest $args
     * @return void
     */
    public function enableVgwRoutePropagation(EnableVgwRoutePropagationRequest $args)
    {
        parent::enableVgwRoutePropagation($args->toArray());
    }
}
