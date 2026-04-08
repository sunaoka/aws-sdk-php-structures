<?php

namespace Sunaoka\Aws\Structures\Outposts\CreateRenewal;

trait CreateRenewalTrait
{
    /**
     * @param CreateRenewalRequest $args
     * @return CreateRenewalResponse
     */
    public function createRenewal(CreateRenewalRequest $args)
    {
        $result = parent::createRenewal($args->toArray());
        return new CreateRenewalResponse($result->toArray());
    }
}
