<?php

namespace Sunaoka\Aws\Structures\ForecastService\DeleteDataset;

trait DeleteDatasetTrait
{
    /**
     * @param DeleteDatasetRequest $args
     * @return void
     */
    public function deleteDataset(DeleteDatasetRequest $args)
    {
        parent::deleteDataset($args->toArray());
    }
}
