<?php

namespace Sunaoka\Aws\Structures\Kms\UpdateKeyDescription;

trait UpdateKeyDescriptionTrait
{
    /**
     * @param UpdateKeyDescriptionRequest $args
     * @return void
     */
    public function updateKeyDescription(UpdateKeyDescriptionRequest $args)
    {
        parent::updateKeyDescription($args->toArray());
    }
}
