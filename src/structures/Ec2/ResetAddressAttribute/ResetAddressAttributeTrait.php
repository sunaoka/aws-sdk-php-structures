<?php

namespace Sunaoka\Aws\Structures\Ec2\ResetAddressAttribute;

trait ResetAddressAttributeTrait
{
    /**
     * @param ResetAddressAttributeRequest $args
     * @return ResetAddressAttributeResponse
     */
    public function resetAddressAttribute(ResetAddressAttributeRequest $args)
    {
        $result = parent::resetAddressAttribute($args->toArray());
        return new ResetAddressAttributeResponse($result->toArray());
    }
}
