<?php

namespace Sunaoka\Aws\Structures\PcaConnectorAd\DeleteTemplate;

trait DeleteTemplateTrait
{
    /**
     * @param DeleteTemplateRequest $args
     * @return void
     */
    public function deleteTemplate(DeleteTemplateRequest $args)
    {
        parent::deleteTemplate($args->toArray());
    }
}
