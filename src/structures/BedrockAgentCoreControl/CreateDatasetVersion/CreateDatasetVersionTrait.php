<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateDatasetVersion;

trait CreateDatasetVersionTrait
{
    /**
     * @param CreateDatasetVersionRequest $args
     * @return CreateDatasetVersionResponse
     */
    public function createDatasetVersion(CreateDatasetVersionRequest $args)
    {
        $result = parent::createDatasetVersion($args->toArray());
        return new CreateDatasetVersionResponse($result->toArray());
    }
}
