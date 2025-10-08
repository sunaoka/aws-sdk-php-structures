<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\DeleteSystemTemplate;

trait DeleteSystemTemplateTrait
{
    /**
     * @param DeleteSystemTemplateRequest $args
     * @return DeleteSystemTemplateResponse
     */
    public function deleteSystemTemplate(DeleteSystemTemplateRequest $args)
    {
        $result = parent::deleteSystemTemplate($args->toArray());
        return new DeleteSystemTemplateResponse($result->toArray());
    }
}
