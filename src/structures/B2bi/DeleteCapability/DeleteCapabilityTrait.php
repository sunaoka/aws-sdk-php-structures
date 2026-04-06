<?php

namespace Sunaoka\Aws\Structures\B2bi\DeleteCapability;

trait DeleteCapabilityTrait
{
    /**
     * @param DeleteCapabilityRequest $args
     * @return void
     */
    public function deleteCapability(DeleteCapabilityRequest $args)
    {
        parent::deleteCapability($args->toArray());
    }
}
