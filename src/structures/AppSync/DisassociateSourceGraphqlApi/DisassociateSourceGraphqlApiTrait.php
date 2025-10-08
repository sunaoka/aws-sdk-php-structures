<?php

namespace Sunaoka\Aws\Structures\AppSync\DisassociateSourceGraphqlApi;

trait DisassociateSourceGraphqlApiTrait
{
    /**
     * @param DisassociateSourceGraphqlApiRequest $args
     * @return DisassociateSourceGraphqlApiResponse
     */
    public function disassociateSourceGraphqlApi(DisassociateSourceGraphqlApiRequest $args)
    {
        $result = parent::disassociateSourceGraphqlApi($args->toArray());
        return new DisassociateSourceGraphqlApiResponse($result->toArray());
    }
}
