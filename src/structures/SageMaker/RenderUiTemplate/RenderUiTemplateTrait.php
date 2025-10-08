<?php

namespace Sunaoka\Aws\Structures\SageMaker\RenderUiTemplate;

trait RenderUiTemplateTrait
{
    /**
     * @param RenderUiTemplateRequest $args
     * @return RenderUiTemplateResponse
     */
    public function renderUiTemplate(RenderUiTemplateRequest $args)
    {
        $result = parent::renderUiTemplate($args->toArray());
        return new RenderUiTemplateResponse($result->toArray());
    }
}
