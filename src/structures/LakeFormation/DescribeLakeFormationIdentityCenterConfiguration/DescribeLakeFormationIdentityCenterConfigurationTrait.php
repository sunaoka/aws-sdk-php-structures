<?php

namespace Sunaoka\Aws\Structures\LakeFormation\DescribeLakeFormationIdentityCenterConfiguration;

trait DescribeLakeFormationIdentityCenterConfigurationTrait
{
    /**
     * @param DescribeLakeFormationIdentityCenterConfigurationRequest $args
     * @return DescribeLakeFormationIdentityCenterConfigurationResponse
     */
    public function describeLakeFormationIdentityCenterConfiguration(DescribeLakeFormationIdentityCenterConfigurationRequest $args)
    {
        $result = parent::describeLakeFormationIdentityCenterConfiguration($args->toArray());
        return new DescribeLakeFormationIdentityCenterConfigurationResponse($result->toArray());
    }
}
