<?php

namespace Sunaoka\Aws\Structures\SecurityLake\CreateAwsLogSource;

trait CreateAwsLogSourceTrait
{
    /**
     * @param CreateAwsLogSourceRequest $args
     * @return CreateAwsLogSourceResponse
     */
    public function createAwsLogSource(CreateAwsLogSourceRequest $args)
    {
        $result = parent::createAwsLogSource($args->toArray());
        return new CreateAwsLogSourceResponse($result->toArray());
    }
}
