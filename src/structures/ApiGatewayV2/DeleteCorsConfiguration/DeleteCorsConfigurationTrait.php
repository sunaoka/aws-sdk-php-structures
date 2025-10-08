<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\DeleteCorsConfiguration;

trait DeleteCorsConfigurationTrait
{
    /**
     * @param DeleteCorsConfigurationRequest $args
     * @return void
     */
    public function deleteCorsConfiguration(DeleteCorsConfigurationRequest $args)
    {
        parent::deleteCorsConfiguration($args->toArray());
    }
}
