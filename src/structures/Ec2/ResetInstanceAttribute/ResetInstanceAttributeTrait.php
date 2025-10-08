<?php

namespace Sunaoka\Aws\Structures\Ec2\ResetInstanceAttribute;

trait ResetInstanceAttributeTrait
{
    /**
     * @param ResetInstanceAttributeRequest $args
     * @return void
     */
    public function resetInstanceAttribute(ResetInstanceAttributeRequest $args)
    {
        parent::resetInstanceAttribute($args->toArray());
    }
}
