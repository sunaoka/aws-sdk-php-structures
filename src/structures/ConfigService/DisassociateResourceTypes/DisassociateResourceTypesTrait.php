<?php

namespace Sunaoka\Aws\Structures\ConfigService\DisassociateResourceTypes;

trait DisassociateResourceTypesTrait
{
    /**
     * @param DisassociateResourceTypesRequest $args
     * @return DisassociateResourceTypesResponse
     */
    public function disassociateResourceTypes(DisassociateResourceTypesRequest $args)
    {
        $result = parent::disassociateResourceTypes($args->toArray());
        return new DisassociateResourceTypesResponse($result->toArray());
    }
}
