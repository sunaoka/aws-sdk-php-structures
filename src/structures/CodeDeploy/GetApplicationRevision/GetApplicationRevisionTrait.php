<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\GetApplicationRevision;

trait GetApplicationRevisionTrait
{
    /**
     * @param GetApplicationRevisionRequest $args
     * @return GetApplicationRevisionResponse
     */
    public function getApplicationRevision(GetApplicationRevisionRequest $args)
    {
        $result = parent::getApplicationRevision($args->toArray());
        return new GetApplicationRevisionResponse($result->toArray());
    }
}
