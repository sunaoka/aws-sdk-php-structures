<?php

namespace Sunaoka\Aws\Structures\Sns\SetEndpointAttributes;

trait SetEndpointAttributesTrait
{
    /**
     * @param SetEndpointAttributesRequest $args
     * @return void
     */
    public function setEndpointAttributes(SetEndpointAttributesRequest $args)
    {
        parent::setEndpointAttributes($args->toArray());
    }
}
