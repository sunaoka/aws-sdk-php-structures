<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetResourcesV2;

trait GetResourcesV2Trait
{
    /**
     * @param GetResourcesV2Request $args
     * @return GetResourcesV2Response
     */
    public function getResourcesV2(GetResourcesV2Request $args)
    {
        $result = parent::getResourcesV2($args->toArray());
        return new GetResourcesV2Response($result->toArray());
    }
}
