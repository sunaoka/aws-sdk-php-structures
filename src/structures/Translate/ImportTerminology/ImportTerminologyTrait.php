<?php

namespace Sunaoka\Aws\Structures\Translate\ImportTerminology;

trait ImportTerminologyTrait
{
    /**
     * @param ImportTerminologyRequest $args
     * @return ImportTerminologyResponse
     */
    public function importTerminology(ImportTerminologyRequest $args)
    {
        $result = parent::importTerminology($args->toArray());
        return new ImportTerminologyResponse($result->toArray());
    }
}
