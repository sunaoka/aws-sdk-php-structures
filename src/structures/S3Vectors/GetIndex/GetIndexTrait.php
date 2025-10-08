<?php

namespace Sunaoka\Aws\Structures\S3Vectors\GetIndex;

trait GetIndexTrait
{
    /**
     * @param GetIndexRequest $args
     * @return GetIndexResponse
     */
    public function getIndex(GetIndexRequest $args)
    {
        $result = parent::getIndex($args->toArray());
        return new GetIndexResponse($result->toArray());
    }
}
