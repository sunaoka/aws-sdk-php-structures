<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetSoftwareResourcesV2;

trait GetSoftwareResourcesV2Trait
{
    /**
     * @param GetSoftwareResourcesV2Request $args
     * @return GetSoftwareResourcesV2Response
     */
    public function getSoftwareResourcesV2(GetSoftwareResourcesV2Request $args)
    {
        $result = parent::getSoftwareResourcesV2($args->toArray());
        return new GetSoftwareResourcesV2Response($result->toArray());
    }
}
