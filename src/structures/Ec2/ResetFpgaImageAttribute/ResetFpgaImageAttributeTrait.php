<?php

namespace Sunaoka\Aws\Structures\Ec2\ResetFpgaImageAttribute;

trait ResetFpgaImageAttributeTrait
{
    /**
     * @param ResetFpgaImageAttributeRequest $args
     * @return ResetFpgaImageAttributeResponse
     */
    public function resetFpgaImageAttribute(ResetFpgaImageAttributeRequest $args)
    {
        $result = parent::resetFpgaImageAttribute($args->toArray());
        return new ResetFpgaImageAttributeResponse($result->toArray());
    }
}
