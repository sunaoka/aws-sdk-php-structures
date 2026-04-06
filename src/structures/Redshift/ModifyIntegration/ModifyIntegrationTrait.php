<?php

namespace Sunaoka\Aws\Structures\Redshift\ModifyIntegration;

trait ModifyIntegrationTrait
{
    /**
     * @param ModifyIntegrationRequest $args
     * @return ModifyIntegrationResponse
     */
    public function modifyIntegration(ModifyIntegrationRequest $args)
    {
        $result = parent::modifyIntegration($args->toArray());
        return new ModifyIntegrationResponse($result->toArray());
    }
}
