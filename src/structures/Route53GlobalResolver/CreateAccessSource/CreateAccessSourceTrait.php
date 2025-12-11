<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\CreateAccessSource;

trait CreateAccessSourceTrait
{
    /**
     * @param CreateAccessSourceRequest $args
     * @return CreateAccessSourceResponse
     */
    public function createAccessSource(CreateAccessSourceRequest $args)
    {
        $result = parent::createAccessSource($args->toArray());
        return new CreateAccessSourceResponse($result->toArray());
    }
}
