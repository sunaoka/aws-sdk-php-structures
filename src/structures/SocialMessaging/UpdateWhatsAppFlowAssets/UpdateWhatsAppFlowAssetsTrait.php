<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\UpdateWhatsAppFlowAssets;

trait UpdateWhatsAppFlowAssetsTrait
{
    /**
     * @param UpdateWhatsAppFlowAssetsRequest $args
     * @return UpdateWhatsAppFlowAssetsResponse
     */
    public function updateWhatsAppFlowAssets(UpdateWhatsAppFlowAssetsRequest $args)
    {
        $result = parent::updateWhatsAppFlowAssets($args->toArray());
        return new UpdateWhatsAppFlowAssetsResponse($result->toArray());
    }
}
