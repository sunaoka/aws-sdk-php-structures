<?php

namespace Sunaoka\Aws\Structures\CodeCommit\GetBlob;

trait GetBlobTrait
{
    /**
     * @param GetBlobRequest $args
     * @return GetBlobResponse
     */
    public function getBlob(GetBlobRequest $args)
    {
        $result = parent::getBlob($args->toArray());
        return new GetBlobResponse($result->toArray());
    }
}
