<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyFpgaImageAttribute;

trait ModifyFpgaImageAttributeTrait
{
    /**
     * @param ModifyFpgaImageAttributeRequest $args
     * @return ModifyFpgaImageAttributeResponse
     */
    public function modifyFpgaImageAttribute(ModifyFpgaImageAttributeRequest $args)
    {
        $result = parent::modifyFpgaImageAttribute($args->toArray());
        return new ModifyFpgaImageAttributeResponse($result->toArray());
    }
}
