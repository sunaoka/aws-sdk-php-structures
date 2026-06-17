<?php

namespace Sunaoka\Aws\Structures\Glue\ListGlossaryTerms;

trait ListGlossaryTermsTrait
{
    /**
     * @param ListGlossaryTermsRequest $args
     * @return ListGlossaryTermsResponse
     */
    public function listGlossaryTerms(ListGlossaryTermsRequest $args)
    {
        $result = parent::listGlossaryTerms($args->toArray());
        return new ListGlossaryTermsResponse($result->toArray());
    }
}
