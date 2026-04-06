<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\CheckNoNewAccess;

trait CheckNoNewAccessTrait
{
    /**
     * @param CheckNoNewAccessRequest $args
     * @return CheckNoNewAccessResponse
     */
    public function checkNoNewAccess(CheckNoNewAccessRequest $args)
    {
        $result = parent::checkNoNewAccess($args->toArray());
        return new CheckNoNewAccessResponse($result->toArray());
    }
}
