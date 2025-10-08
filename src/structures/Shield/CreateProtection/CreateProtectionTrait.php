<?php

namespace Sunaoka\Aws\Structures\Shield\CreateProtection;

trait CreateProtectionTrait
{
    /**
     * @param CreateProtectionRequest $args
     * @return CreateProtectionResponse
     */
    public function createProtection(CreateProtectionRequest $args)
    {
        $result = parent::createProtection($args->toArray());
        return new CreateProtectionResponse($result->toArray());
    }
}
