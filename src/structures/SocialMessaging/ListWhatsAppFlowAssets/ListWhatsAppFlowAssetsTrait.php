<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\ListWhatsAppFlowAssets;

trait ListWhatsAppFlowAssetsTrait
{
    /**
     * @param ListWhatsAppFlowAssetsRequest $args
     * @return ListWhatsAppFlowAssetsResponse
     */
    public function listWhatsAppFlowAssets(ListWhatsAppFlowAssetsRequest $args)
    {
        $result = parent::listWhatsAppFlowAssets($args->toArray());
        return new ListWhatsAppFlowAssetsResponse($result->toArray());
    }
}
