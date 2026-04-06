<?php

namespace Sunaoka\Aws\Structures\WorkLink\UpdateDomainMetadata;

trait UpdateDomainMetadataTrait
{
    /**
     * @param UpdateDomainMetadataRequest $args
     * @return UpdateDomainMetadataResponse
     */
    public function updateDomainMetadata(UpdateDomainMetadataRequest $args)
    {
        $result = parent::updateDomainMetadata($args->toArray());
        return new UpdateDomainMetadataResponse($result->toArray());
    }
}
