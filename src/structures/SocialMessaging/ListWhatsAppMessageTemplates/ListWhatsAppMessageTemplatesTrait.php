<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\ListWhatsAppMessageTemplates;

trait ListWhatsAppMessageTemplatesTrait
{
    /**
     * @param ListWhatsAppMessageTemplatesRequest $args
     * @return ListWhatsAppMessageTemplatesResponse
     */
    public function listWhatsAppMessageTemplates(ListWhatsAppMessageTemplatesRequest $args)
    {
        $result = parent::listWhatsAppMessageTemplates($args->toArray());
        return new ListWhatsAppMessageTemplatesResponse($result->toArray());
    }
}
