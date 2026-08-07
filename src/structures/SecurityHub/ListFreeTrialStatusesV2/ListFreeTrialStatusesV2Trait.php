<?php

namespace Sunaoka\Aws\Structures\SecurityHub\ListFreeTrialStatusesV2;

trait ListFreeTrialStatusesV2Trait
{
    /**
     * @param ListFreeTrialStatusesV2Request $args
     * @return ListFreeTrialStatusesV2Response
     */
    public function listFreeTrialStatusesV2(ListFreeTrialStatusesV2Request $args)
    {
        $result = parent::listFreeTrialStatusesV2($args->toArray());
        return new ListFreeTrialStatusesV2Response($result->toArray());
    }
}
