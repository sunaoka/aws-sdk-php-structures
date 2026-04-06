<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateAssetRevision;

trait CreateAssetRevisionTrait
{
    /**
     * @param CreateAssetRevisionRequest $args
     * @return CreateAssetRevisionResponse
     */
    public function createAssetRevision(CreateAssetRevisionRequest $args)
    {
        $result = parent::createAssetRevision($args->toArray());
        return new CreateAssetRevisionResponse($result->toArray());
    }
}
