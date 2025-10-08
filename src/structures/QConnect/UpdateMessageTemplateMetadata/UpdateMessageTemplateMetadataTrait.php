<?php

namespace Sunaoka\Aws\Structures\QConnect\UpdateMessageTemplateMetadata;

trait UpdateMessageTemplateMetadataTrait
{
    /**
     * @param UpdateMessageTemplateMetadataRequest $args
     * @return UpdateMessageTemplateMetadataResponse
     */
    public function updateMessageTemplateMetadata(UpdateMessageTemplateMetadataRequest $args)
    {
        $result = parent::updateMessageTemplateMetadata($args->toArray());
        return new UpdateMessageTemplateMetadataResponse($result->toArray());
    }
}
