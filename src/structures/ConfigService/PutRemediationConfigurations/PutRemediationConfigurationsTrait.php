<?php

namespace Sunaoka\Aws\Structures\ConfigService\PutRemediationConfigurations;

trait PutRemediationConfigurationsTrait
{
    /**
     * @param PutRemediationConfigurationsRequest $args
     * @return PutRemediationConfigurationsResponse
     */
    public function putRemediationConfigurations(PutRemediationConfigurationsRequest $args)
    {
        $result = parent::putRemediationConfigurations($args->toArray());
        return new PutRemediationConfigurationsResponse($result->toArray());
    }
}
