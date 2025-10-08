<?php

namespace Sunaoka\Aws\Structures\SesV2\PutConfigurationSetArchivingOptions;

trait PutConfigurationSetArchivingOptionsTrait
{
    /**
     * @param PutConfigurationSetArchivingOptionsRequest $args
     * @return PutConfigurationSetArchivingOptionsResponse
     */
    public function putConfigurationSetArchivingOptions(PutConfigurationSetArchivingOptionsRequest $args)
    {
        $result = parent::putConfigurationSetArchivingOptions($args->toArray());
        return new PutConfigurationSetArchivingOptionsResponse($result->toArray());
    }
}
