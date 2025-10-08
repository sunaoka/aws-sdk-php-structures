<?php

namespace Sunaoka\Aws\Structures\WorkDocs\CreateCustomMetadata;

trait CreateCustomMetadataTrait
{
    /**
     * @param CreateCustomMetadataRequest $args
     * @return CreateCustomMetadataResponse
     */
    public function createCustomMetadata(CreateCustomMetadataRequest $args)
    {
        $result = parent::createCustomMetadata($args->toArray());
        return new CreateCustomMetadataResponse($result->toArray());
    }
}
