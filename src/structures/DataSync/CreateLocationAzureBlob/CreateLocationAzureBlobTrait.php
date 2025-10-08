<?php

namespace Sunaoka\Aws\Structures\DataSync\CreateLocationAzureBlob;

trait CreateLocationAzureBlobTrait
{
    /**
     * @param CreateLocationAzureBlobRequest $args
     * @return CreateLocationAzureBlobResponse
     */
    public function createLocationAzureBlob(CreateLocationAzureBlobRequest $args)
    {
        $result = parent::createLocationAzureBlob($args->toArray());
        return new CreateLocationAzureBlobResponse($result->toArray());
    }
}
