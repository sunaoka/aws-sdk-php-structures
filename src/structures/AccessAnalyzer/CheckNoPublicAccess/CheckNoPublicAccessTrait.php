<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\CheckNoPublicAccess;

trait CheckNoPublicAccessTrait
{
    /**
     * @param CheckNoPublicAccessRequest $args
     * @return CheckNoPublicAccessResponse
     */
    public function checkNoPublicAccess(CheckNoPublicAccessRequest $args)
    {
        $result = parent::checkNoPublicAccess($args->toArray());
        return new CheckNoPublicAccessResponse($result->toArray());
    }
}
