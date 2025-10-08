<?php

namespace Sunaoka\Aws\Structures\SesV2\PutEmailIdentityConfigurationSetAttributes;

trait PutEmailIdentityConfigurationSetAttributesTrait
{
    /**
     * @param PutEmailIdentityConfigurationSetAttributesRequest $args
     * @return PutEmailIdentityConfigurationSetAttributesResponse
     */
    public function putEmailIdentityConfigurationSetAttributes(PutEmailIdentityConfigurationSetAttributesRequest $args)
    {
        $result = parent::putEmailIdentityConfigurationSetAttributes($args->toArray());
        return new PutEmailIdentityConfigurationSetAttributesResponse($result->toArray());
    }
}
