<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteCoipCidr;

trait DeleteCoipCidrTrait
{
    /**
     * @param DeleteCoipCidrRequest $args
     * @return DeleteCoipCidrResponse
     */
    public function deleteCoipCidr(DeleteCoipCidrRequest $args)
    {
        $result = parent::deleteCoipCidr($args->toArray());
        return new DeleteCoipCidrResponse($result->toArray());
    }
}
