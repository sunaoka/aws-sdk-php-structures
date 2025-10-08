<?php

namespace Sunaoka\Aws\Structures\PcaConnectorAd\GetTemplate;

trait GetTemplateTrait
{
    /**
     * @param GetTemplateRequest $args
     * @return GetTemplateResponse
     */
    public function getTemplate(GetTemplateRequest $args)
    {
        $result = parent::getTemplate($args->toArray());
        return new GetTemplateResponse($result->toArray());
    }
}
