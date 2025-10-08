<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DeleteDataProvider;

trait DeleteDataProviderTrait
{
    /**
     * @param DeleteDataProviderRequest $args
     * @return DeleteDataProviderResponse
     */
    public function deleteDataProvider(DeleteDataProviderRequest $args)
    {
        $result = parent::deleteDataProvider($args->toArray());
        return new DeleteDataProviderResponse($result->toArray());
    }
}
