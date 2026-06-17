<?php

namespace Sunaoka\Aws\Structures\Glue\AssociateGlossaryTerms;

trait AssociateGlossaryTermsTrait
{
    /**
     * @param AssociateGlossaryTermsRequest $args
     * @return AssociateGlossaryTermsResponse
     */
    public function associateGlossaryTerms(AssociateGlossaryTermsRequest $args)
    {
        $result = parent::associateGlossaryTerms($args->toArray());
        return new AssociateGlossaryTermsResponse($result->toArray());
    }
}
