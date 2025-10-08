<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\ModifyDataProvider;

trait ModifyDataProviderTrait
{
    /**
     * @param ModifyDataProviderRequest $args
     * @return ModifyDataProviderResponse
     */
    public function modifyDataProvider(ModifyDataProviderRequest $args)
    {
        $result = parent::modifyDataProvider($args->toArray());
        return new ModifyDataProviderResponse($result->toArray());
    }
}
