<?php

namespace Sunaoka\Aws\Structures\Sms\GenerateTemplate;

trait GenerateTemplateTrait
{
    /**
     * @param GenerateTemplateRequest $args
     * @return GenerateTemplateResponse
     */
    public function generateTemplate(GenerateTemplateRequest $args)
    {
        $result = parent::generateTemplate($args->toArray());
        return new GenerateTemplateResponse($result->toArray());
    }
}
