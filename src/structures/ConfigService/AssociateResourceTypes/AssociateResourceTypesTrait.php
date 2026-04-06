<?php

namespace Sunaoka\Aws\Structures\ConfigService\AssociateResourceTypes;

trait AssociateResourceTypesTrait
{
    /**
     * @param AssociateResourceTypesRequest $args
     * @return AssociateResourceTypesResponse
     */
    public function associateResourceTypes(AssociateResourceTypesRequest $args)
    {
        $result = parent::associateResourceTypes($args->toArray());
        return new AssociateResourceTypesResponse($result->toArray());
    }
}
