<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteAlgorithm;

trait DeleteAlgorithmTrait
{
    /**
     * @param DeleteAlgorithmRequest $args
     * @return void
     */
    public function deleteAlgorithm(DeleteAlgorithmRequest $args)
    {
        parent::deleteAlgorithm($args->toArray());
    }
}
