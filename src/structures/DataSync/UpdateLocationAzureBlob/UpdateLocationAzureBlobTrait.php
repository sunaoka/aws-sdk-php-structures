<?php

namespace Sunaoka\Aws\Structures\DataSync\UpdateLocationAzureBlob;

trait UpdateLocationAzureBlobTrait
{
    /**
     * @param UpdateLocationAzureBlobRequest $args
     * @return UpdateLocationAzureBlobResponse
     */
    public function updateLocationAzureBlob(UpdateLocationAzureBlobRequest $args)
    {
        $result = parent::updateLocationAzureBlob($args->toArray());
        return new UpdateLocationAzureBlobResponse($result->toArray());
    }
}
