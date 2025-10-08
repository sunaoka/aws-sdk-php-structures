<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateTemplateActiveVersion;

trait UpdateTemplateActiveVersionTrait
{
    /**
     * @param UpdateTemplateActiveVersionRequest $args
     * @return UpdateTemplateActiveVersionResponse
     */
    public function updateTemplateActiveVersion(UpdateTemplateActiveVersionRequest $args)
    {
        $result = parent::updateTemplateActiveVersion($args->toArray());
        return new UpdateTemplateActiveVersionResponse($result->toArray());
    }
}
