<?php

namespace Sunaoka\Aws\Structures\Ssm\ValidateCloudConnector;

trait ValidateCloudConnectorTrait
{
    /**
     * @param ValidateCloudConnectorRequest $args
     * @return ValidateCloudConnectorResponse
     */
    public function validateCloudConnector(ValidateCloudConnectorRequest $args)
    {
        $result = parent::validateCloudConnector($args->toArray());
        return new ValidateCloudConnectorResponse($result->toArray());
    }
}
