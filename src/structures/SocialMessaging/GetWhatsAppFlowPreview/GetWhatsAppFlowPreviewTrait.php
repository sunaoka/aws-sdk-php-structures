<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\GetWhatsAppFlowPreview;

trait GetWhatsAppFlowPreviewTrait
{
    /**
     * @param GetWhatsAppFlowPreviewRequest $args
     * @return GetWhatsAppFlowPreviewResponse
     */
    public function getWhatsAppFlowPreview(GetWhatsAppFlowPreviewRequest $args)
    {
        $result = parent::getWhatsAppFlowPreview($args->toArray());
        return new GetWhatsAppFlowPreviewResponse($result->toArray());
    }
}
