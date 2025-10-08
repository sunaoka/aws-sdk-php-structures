<?php

namespace Sunaoka\Aws\Structures\RoboMaker\GetWorldTemplateBody;

trait GetWorldTemplateBodyTrait
{
    /**
     * @param GetWorldTemplateBodyRequest $args
     * @return GetWorldTemplateBodyResponse
     */
    public function getWorldTemplateBody(GetWorldTemplateBodyRequest $args)
    {
        $result = parent::getWorldTemplateBody($args->toArray());
        return new GetWorldTemplateBodyResponse($result->toArray());
    }
}
