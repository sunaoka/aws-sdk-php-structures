<?php

namespace Sunaoka\Aws\Structures\SecurityHub\ListExposuresByRemediationV2;

trait ListExposuresByRemediationV2Trait
{
    /**
     * @param ListExposuresByRemediationV2Request $args
     * @return ListExposuresByRemediationV2Response
     */
    public function listExposuresByRemediationV2(ListExposuresByRemediationV2Request $args)
    {
        $result = parent::listExposuresByRemediationV2($args->toArray());
        return new ListExposuresByRemediationV2Response($result->toArray());
    }
}
