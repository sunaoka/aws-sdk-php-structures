<?php

namespace Sunaoka\Aws\Structures\Ec2\ResetImageAttribute;

trait ResetImageAttributeTrait
{
    /**
     * @param ResetImageAttributeRequest $args
     * @return void
     */
    public function resetImageAttribute(ResetImageAttributeRequest $args)
    {
        parent::resetImageAttribute($args->toArray());
    }
}
