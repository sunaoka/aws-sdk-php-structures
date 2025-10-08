<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateDataProductRevision;

trait CreateDataProductRevisionTrait
{
    /**
     * @param CreateDataProductRevisionRequest $args
     * @return CreateDataProductRevisionResponse
     */
    public function createDataProductRevision(CreateDataProductRevisionRequest $args)
    {
        $result = parent::createDataProductRevision($args->toArray());
        return new CreateDataProductRevisionResponse($result->toArray());
    }
}
