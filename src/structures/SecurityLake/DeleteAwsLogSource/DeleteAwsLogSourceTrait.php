<?php

namespace Sunaoka\Aws\Structures\SecurityLake\DeleteAwsLogSource;

trait DeleteAwsLogSourceTrait
{
    /**
     * @param DeleteAwsLogSourceRequest $args
     * @return DeleteAwsLogSourceResponse
     */
    public function deleteAwsLogSource(DeleteAwsLogSourceRequest $args)
    {
        $result = parent::deleteAwsLogSource($args->toArray());
        return new DeleteAwsLogSourceResponse($result->toArray());
    }
}
