<?php

namespace Sunaoka\Aws\Structures\CloudTrail\ListImports;

trait ListImportsTrait
{
    /**
     * @param ListImportsRequest $args
     * @return ListImportsResponse
     */
    public function listImports(ListImportsRequest $args)
    {
        $result = parent::listImports($args->toArray());
        return new ListImportsResponse($result->toArray());
    }
}
