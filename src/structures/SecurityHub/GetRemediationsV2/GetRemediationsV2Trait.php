<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetRemediationsV2;

trait GetRemediationsV2Trait
{
    /**
     * @param GetRemediationsV2Request $args
     * @return GetRemediationsV2Response
     */
    public function getRemediationsV2(GetRemediationsV2Request $args)
    {
        $result = parent::getRemediationsV2($args->toArray());
        return new GetRemediationsV2Response($result->toArray());
    }
}
