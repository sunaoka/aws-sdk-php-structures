<?php

namespace Sunaoka\Aws\Structures\SecurityIR\ListCaseEdits;

trait ListCaseEditsTrait
{
    /**
     * @param ListCaseEditsRequest $args
     * @return ListCaseEditsResponse
     */
    public function listCaseEdits(ListCaseEditsRequest $args)
    {
        $result = parent::listCaseEdits($args->toArray());
        return new ListCaseEditsResponse($result->toArray());
    }
}
