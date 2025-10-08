<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateCoipCidr;

trait CreateCoipCidrTrait
{
    /**
     * @param CreateCoipCidrRequest $args
     * @return CreateCoipCidrResponse
     */
    public function createCoipCidr(CreateCoipCidrRequest $args)
    {
        $result = parent::createCoipCidr($args->toArray());
        return new CreateCoipCidrResponse($result->toArray());
    }
}
