<?php

namespace Sunaoka\Aws\Structures\Lambda\GetLayerVersionByArn;

trait GetLayerVersionByArnTrait
{
    /**
     * @param GetLayerVersionByArnRequest $args
     * @return GetLayerVersionByArnResponse
     */
    public function getLayerVersionByArn(GetLayerVersionByArnRequest $args)
    {
        $result = parent::getLayerVersionByArn($args->toArray());
        return new GetLayerVersionByArnResponse($result->toArray());
    }
}
