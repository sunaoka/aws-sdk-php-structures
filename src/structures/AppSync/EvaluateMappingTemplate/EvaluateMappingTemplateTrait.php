<?php

namespace Sunaoka\Aws\Structures\AppSync\EvaluateMappingTemplate;

trait EvaluateMappingTemplateTrait
{
    /**
     * @param EvaluateMappingTemplateRequest $args
     * @return EvaluateMappingTemplateResponse
     */
    public function evaluateMappingTemplate(EvaluateMappingTemplateRequest $args)
    {
        $result = parent::evaluateMappingTemplate($args->toArray());
        return new EvaluateMappingTemplateResponse($result->toArray());
    }
}
