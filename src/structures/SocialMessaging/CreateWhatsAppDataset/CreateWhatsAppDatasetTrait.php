<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\CreateWhatsAppDataset;

trait CreateWhatsAppDatasetTrait
{
    /**
     * @param CreateWhatsAppDatasetRequest $args
     * @return CreateWhatsAppDatasetResponse
     */
    public function createWhatsAppDataset(CreateWhatsAppDatasetRequest $args)
    {
        $result = parent::createWhatsAppDataset($args->toArray());
        return new CreateWhatsAppDatasetResponse($result->toArray());
    }
}
