<?php

namespace Sunaoka\Aws\Structures\QConnect\DeleteImportJob;

trait DeleteImportJobTrait
{
    /**
     * @param DeleteImportJobRequest $args
     * @return DeleteImportJobResponse
     */
    public function deleteImportJob(DeleteImportJobRequest $args)
    {
        $result = parent::deleteImportJob($args->toArray());
        return new DeleteImportJobResponse($result->toArray());
    }
}
