<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\DeprecateSystemTemplate;

trait DeprecateSystemTemplateTrait
{
    /**
     * @param DeprecateSystemTemplateRequest $args
     * @return DeprecateSystemTemplateResponse
     */
    public function deprecateSystemTemplate(DeprecateSystemTemplateRequest $args)
    {
        $result = parent::deprecateSystemTemplate($args->toArray());
        return new DeprecateSystemTemplateResponse($result->toArray());
    }
}
