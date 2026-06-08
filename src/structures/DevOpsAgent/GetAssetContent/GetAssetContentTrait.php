<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\GetAssetContent;

trait GetAssetContentTrait
{
    /**
     * @param GetAssetContentRequest $args
     * @return GetAssetContentResponse
     */
    public function getAssetContent(GetAssetContentRequest $args)
    {
        $result = parent::getAssetContent($args->toArray());
        return new GetAssetContentResponse($result->toArray());
    }
}
