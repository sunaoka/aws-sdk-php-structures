<?php

namespace Sunaoka\Aws\Structures\Glue\DisassociateGlossaryTerms;

trait DisassociateGlossaryTermsTrait
{
    /**
     * @param DisassociateGlossaryTermsRequest $args
     * @return DisassociateGlossaryTermsResponse
     */
    public function disassociateGlossaryTerms(DisassociateGlossaryTermsRequest $args)
    {
        $result = parent::disassociateGlossaryTerms($args->toArray());
        return new DisassociateGlossaryTermsResponse($result->toArray());
    }
}
