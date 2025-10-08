<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyAddressAttribute;

trait ModifyAddressAttributeTrait
{
    /**
     * @param ModifyAddressAttributeRequest $args
     * @return ModifyAddressAttributeResponse
     */
    public function modifyAddressAttribute(ModifyAddressAttributeRequest $args)
    {
        $result = parent::modifyAddressAttribute($args->toArray());
        return new ModifyAddressAttributeResponse($result->toArray());
    }
}
