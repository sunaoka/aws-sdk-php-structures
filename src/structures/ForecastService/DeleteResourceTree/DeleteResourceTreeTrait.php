<?php

namespace Sunaoka\Aws\Structures\ForecastService\DeleteResourceTree;

trait DeleteResourceTreeTrait
{
    /**
     * @param DeleteResourceTreeRequest $args
     * @return void
     */
    public function deleteResourceTree(DeleteResourceTreeRequest $args)
    {
        parent::deleteResourceTree($args->toArray());
    }
}
