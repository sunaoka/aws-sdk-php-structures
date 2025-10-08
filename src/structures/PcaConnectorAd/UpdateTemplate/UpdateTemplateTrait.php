<?php

namespace Sunaoka\Aws\Structures\PcaConnectorAd\UpdateTemplate;

trait UpdateTemplateTrait
{
    /**
     * @param UpdateTemplateRequest $args
     * @return void
     */
    public function updateTemplate(UpdateTemplateRequest $args)
    {
        parent::updateTemplate($args->toArray());
    }
}
