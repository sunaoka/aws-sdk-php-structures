<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeDomainConfiguration;

trait DescribeDomainConfigurationTrait
{
    /**
     * @param DescribeDomainConfigurationRequest $args
     * @return DescribeDomainConfigurationResponse
     */
    public function describeDomainConfiguration(DescribeDomainConfigurationRequest $args)
    {
        $result = parent::describeDomainConfiguration($args->toArray());
        return new DescribeDomainConfigurationResponse($result->toArray());
    }
}
