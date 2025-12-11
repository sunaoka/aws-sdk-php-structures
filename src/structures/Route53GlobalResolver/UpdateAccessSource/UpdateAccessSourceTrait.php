<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\UpdateAccessSource;

trait UpdateAccessSourceTrait
{
    /**
     * @param UpdateAccessSourceRequest $args
     * @return UpdateAccessSourceResponse
     */
    public function updateAccessSource(UpdateAccessSourceRequest $args)
    {
        $result = parent::updateAccessSource($args->toArray());
        return new UpdateAccessSourceResponse($result->toArray());
    }
}
