<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateMessageTemplateVersion;

trait CreateMessageTemplateVersionTrait
{
    /**
     * @param CreateMessageTemplateVersionRequest $args
     * @return CreateMessageTemplateVersionResponse
     */
    public function createMessageTemplateVersion(CreateMessageTemplateVersionRequest $args)
    {
        $result = parent::createMessageTemplateVersion($args->toArray());
        return new CreateMessageTemplateVersionResponse($result->toArray());
    }
}
