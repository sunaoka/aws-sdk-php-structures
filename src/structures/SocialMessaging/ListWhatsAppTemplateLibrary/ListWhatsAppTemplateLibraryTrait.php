<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\ListWhatsAppTemplateLibrary;

trait ListWhatsAppTemplateLibraryTrait
{
    /**
     * @param ListWhatsAppTemplateLibraryRequest $args
     * @return ListWhatsAppTemplateLibraryResponse
     */
    public function listWhatsAppTemplateLibrary(ListWhatsAppTemplateLibraryRequest $args)
    {
        $result = parent::listWhatsAppTemplateLibrary($args->toArray());
        return new ListWhatsAppTemplateLibraryResponse($result->toArray());
    }
}
