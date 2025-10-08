<?php

namespace Sunaoka\Aws\Structures\mgn\PutTemplateAction;

trait PutTemplateActionTrait
{
    /**
     * @param PutTemplateActionRequest $args
     * @return PutTemplateActionResponse
     */
    public function putTemplateAction(PutTemplateActionRequest $args)
    {
        $result = parent::putTemplateAction($args->toArray());
        return new PutTemplateActionResponse($result->toArray());
    }
}
