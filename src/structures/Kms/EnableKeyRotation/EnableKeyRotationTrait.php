<?php

namespace Sunaoka\Aws\Structures\Kms\EnableKeyRotation;

trait EnableKeyRotationTrait
{
    /**
     * @param EnableKeyRotationRequest $args
     * @return void
     */
    public function enableKeyRotation(EnableKeyRotationRequest $args)
    {
        parent::enableKeyRotation($args->toArray());
    }
}
