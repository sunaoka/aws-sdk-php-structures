<?php

namespace Sunaoka\Aws\Structures\Kms\DisableKeyRotation;

trait DisableKeyRotationTrait
{
    /**
     * @param DisableKeyRotationRequest $args
     * @return void
     */
    public function disableKeyRotation(DisableKeyRotationRequest $args)
    {
        parent::disableKeyRotation($args->toArray());
    }
}
