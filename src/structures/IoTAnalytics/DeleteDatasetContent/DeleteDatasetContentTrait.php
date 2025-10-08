<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\DeleteDatasetContent;

trait DeleteDatasetContentTrait
{
    /**
     * @param DeleteDatasetContentRequest $args
     * @return void
     */
    public function deleteDatasetContent(DeleteDatasetContentRequest $args)
    {
        parent::deleteDatasetContent($args->toArray());
    }
}
