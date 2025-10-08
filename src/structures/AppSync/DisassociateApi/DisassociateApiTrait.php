<?php

namespace Sunaoka\Aws\Structures\AppSync\DisassociateApi;

trait DisassociateApiTrait
{
    /**
     * @param DisassociateApiRequest $args
     * @return DisassociateApiResponse
     */
    public function disassociateApi(DisassociateApiRequest $args)
    {
        $result = parent::disassociateApi($args->toArray());
        return new DisassociateApiResponse($result->toArray());
    }
}
