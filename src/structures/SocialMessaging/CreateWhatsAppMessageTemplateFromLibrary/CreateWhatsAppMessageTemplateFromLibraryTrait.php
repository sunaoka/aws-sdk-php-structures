<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\CreateWhatsAppMessageTemplateFromLibrary;

trait CreateWhatsAppMessageTemplateFromLibraryTrait
{
    /**
     * @param CreateWhatsAppMessageTemplateFromLibraryRequest $args
     * @return CreateWhatsAppMessageTemplateFromLibraryResponse
     */
    public function createWhatsAppMessageTemplateFromLibrary(CreateWhatsAppMessageTemplateFromLibraryRequest $args)
    {
        $result = parent::createWhatsAppMessageTemplateFromLibrary($args->toArray());
        return new CreateWhatsAppMessageTemplateFromLibraryResponse($result->toArray());
    }
}
