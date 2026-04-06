<?php

namespace Sunaoka\Aws\Structures\QLDB\GetRevision;

trait GetRevisionTrait
{
    /**
     * @param GetRevisionRequest $args
     * @return GetRevisionResponse
     */
    public function getRevision(GetRevisionRequest $args)
    {
        $result = parent::getRevision($args->toArray());
        return new GetRevisionResponse($result->toArray());
    }
}
