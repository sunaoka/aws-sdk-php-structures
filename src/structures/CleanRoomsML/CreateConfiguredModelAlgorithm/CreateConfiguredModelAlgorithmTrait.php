<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\CreateConfiguredModelAlgorithm;

trait CreateConfiguredModelAlgorithmTrait
{
    /**
     * @param CreateConfiguredModelAlgorithmRequest $args
     * @return CreateConfiguredModelAlgorithmResponse
     */
    public function createConfiguredModelAlgorithm(CreateConfiguredModelAlgorithmRequest $args)
    {
        $result = parent::createConfiguredModelAlgorithm($args->toArray());
        return new CreateConfiguredModelAlgorithmResponse($result->toArray());
    }
}
