<?php

namespace Sunaoka\Aws\Structures\Sns\SetPlatformApplicationAttributes;

trait SetPlatformApplicationAttributesTrait
{
    /**
     * @param SetPlatformApplicationAttributesRequest $args
     * @return void
     */
    public function setPlatformApplicationAttributes(SetPlatformApplicationAttributesRequest $args)
    {
        parent::setPlatformApplicationAttributes($args->toArray());
    }
}
