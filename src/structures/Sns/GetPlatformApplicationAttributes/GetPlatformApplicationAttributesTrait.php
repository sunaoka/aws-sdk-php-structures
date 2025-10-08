<?php

namespace Sunaoka\Aws\Structures\Sns\GetPlatformApplicationAttributes;

trait GetPlatformApplicationAttributesTrait
{
    /**
     * @param GetPlatformApplicationAttributesRequest $args
     * @return GetPlatformApplicationAttributesResponse
     */
    public function getPlatformApplicationAttributes(GetPlatformApplicationAttributesRequest $args)
    {
        $result = parent::getPlatformApplicationAttributes($args->toArray());
        return new GetPlatformApplicationAttributesResponse($result->toArray());
    }
}
