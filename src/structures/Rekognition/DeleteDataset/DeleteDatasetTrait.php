<?php

namespace Sunaoka\Aws\Structures\Rekognition\DeleteDataset;

trait DeleteDatasetTrait
{
    /**
     * @param DeleteDatasetRequest $args
     * @return DeleteDatasetResponse
     */
    public function deleteDataset(DeleteDatasetRequest $args)
    {
        $result = parent::deleteDataset($args->toArray());
        return new DeleteDatasetResponse($result->toArray());
    }
}
