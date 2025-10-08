<?php

namespace Sunaoka\Aws\Structures\ForecastService\DeleteDatasetImportJob;

trait DeleteDatasetImportJobTrait
{
    /**
     * @param DeleteDatasetImportJobRequest $args
     * @return void
     */
    public function deleteDatasetImportJob(DeleteDatasetImportJobRequest $args)
    {
        parent::deleteDatasetImportJob($args->toArray());
    }
}
