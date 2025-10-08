<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\DeleteStateTemplate;

trait DeleteStateTemplateTrait
{
    /**
     * @param DeleteStateTemplateRequest $args
     * @return DeleteStateTemplateResponse
     */
    public function deleteStateTemplate(DeleteStateTemplateRequest $args)
    {
        $result = parent::deleteStateTemplate($args->toArray());
        return new DeleteStateTemplateResponse($result->toArray());
    }
}
