<?php

namespace Sunaoka\Aws\Structures\RoboMaker\DeleteWorldTemplate;

trait DeleteWorldTemplateTrait
{
    /**
     * @param DeleteWorldTemplateRequest $args
     * @return DeleteWorldTemplateResponse
     */
    public function deleteWorldTemplate(DeleteWorldTemplateRequest $args)
    {
        $result = parent::deleteWorldTemplate($args->toArray());
        return new DeleteWorldTemplateResponse($result->toArray());
    }
}
