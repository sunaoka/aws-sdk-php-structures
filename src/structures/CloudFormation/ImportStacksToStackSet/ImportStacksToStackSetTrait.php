<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ImportStacksToStackSet;

trait ImportStacksToStackSetTrait
{
    /**
     * @param ImportStacksToStackSetRequest $args
     * @return ImportStacksToStackSetResponse
     */
    public function importStacksToStackSet(ImportStacksToStackSetRequest $args)
    {
        $result = parent::importStacksToStackSet($args->toArray());
        return new ImportStacksToStackSetResponse($result->toArray());
    }
}
