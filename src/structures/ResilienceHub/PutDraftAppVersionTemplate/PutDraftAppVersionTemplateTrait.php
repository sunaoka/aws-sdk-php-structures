<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\PutDraftAppVersionTemplate;

trait PutDraftAppVersionTemplateTrait
{
    /**
     * @param PutDraftAppVersionTemplateRequest $args
     * @return PutDraftAppVersionTemplateResponse
     */
    public function putDraftAppVersionTemplate(PutDraftAppVersionTemplateRequest $args)
    {
        $result = parent::putDraftAppVersionTemplate($args->toArray());
        return new PutDraftAppVersionTemplateResponse($result->toArray());
    }
}
