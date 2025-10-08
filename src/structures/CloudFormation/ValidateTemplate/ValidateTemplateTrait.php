<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ValidateTemplate;

trait ValidateTemplateTrait
{
    /**
     * @param ValidateTemplateRequest $args
     * @return ValidateTemplateResponse
     */
    public function validateTemplate(ValidateTemplateRequest $args)
    {
        $result = parent::validateTemplate($args->toArray());
        return new ValidateTemplateResponse($result->toArray());
    }
}
