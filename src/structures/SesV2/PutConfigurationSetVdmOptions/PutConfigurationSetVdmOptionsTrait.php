<?php

namespace Sunaoka\Aws\Structures\SesV2\PutConfigurationSetVdmOptions;

trait PutConfigurationSetVdmOptionsTrait
{
    /**
     * @param PutConfigurationSetVdmOptionsRequest $args
     * @return PutConfigurationSetVdmOptionsResponse
     */
    public function putConfigurationSetVdmOptions(PutConfigurationSetVdmOptionsRequest $args)
    {
        $result = parent::putConfigurationSetVdmOptions($args->toArray());
        return new PutConfigurationSetVdmOptionsResponse($result->toArray());
    }
}
