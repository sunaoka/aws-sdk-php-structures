<?php

namespace Sunaoka\Aws\Structures\Personalize\DeleteDataset;

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
