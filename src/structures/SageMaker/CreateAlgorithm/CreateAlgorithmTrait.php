<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateAlgorithm;

trait CreateAlgorithmTrait
{
    /**
     * @param CreateAlgorithmRequest $args
     * @return CreateAlgorithmResponse
     */
    public function createAlgorithm(CreateAlgorithmRequest $args)
    {
        $result = parent::createAlgorithm($args->toArray());
        return new CreateAlgorithmResponse($result->toArray());
    }
}
