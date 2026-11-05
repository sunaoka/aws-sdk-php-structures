<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetSoftwareV2;

trait GetSoftwareV2Trait
{
    /**
     * @param GetSoftwareV2Request $args
     * @return GetSoftwareV2Response
     */
    public function getSoftwareV2(GetSoftwareV2Request $args)
    {
        $result = parent::getSoftwareV2($args->toArray());
        return new GetSoftwareV2Response($result->toArray());
    }
}
