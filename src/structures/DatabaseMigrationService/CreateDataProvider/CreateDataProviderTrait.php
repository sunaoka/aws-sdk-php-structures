<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\CreateDataProvider;

trait CreateDataProviderTrait
{
    /**
     * @param CreateDataProviderRequest $args
     * @return CreateDataProviderResponse
     */
    public function createDataProvider(CreateDataProviderRequest $args)
    {
        $result = parent::createDataProvider($args->toArray());
        return new CreateDataProviderResponse($result->toArray());
    }
}
