<?php

namespace Sunaoka\Aws\Structures\WellArchitected\CreateTemplateShare;

trait CreateTemplateShareTrait
{
    /**
     * @param CreateTemplateShareRequest $args
     * @return CreateTemplateShareResponse
     */
    public function createTemplateShare(CreateTemplateShareRequest $args)
    {
        $result = parent::createTemplateShare($args->toArray());
        return new CreateTemplateShareResponse($result->toArray());
    }
}
