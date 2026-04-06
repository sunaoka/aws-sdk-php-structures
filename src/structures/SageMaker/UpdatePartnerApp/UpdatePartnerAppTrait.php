<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdatePartnerApp;

trait UpdatePartnerAppTrait
{
    /**
     * @param UpdatePartnerAppRequest $args
     * @return UpdatePartnerAppResponse
     */
    public function updatePartnerApp(UpdatePartnerAppRequest $args)
    {
        $result = parent::updatePartnerApp($args->toArray());
        return new UpdatePartnerAppResponse($result->toArray());
    }
}
