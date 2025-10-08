<?php

namespace Sunaoka\Aws\Structures\ResourceGroupsTaggingAPI\GetTagKeys;

trait GetTagKeysTrait
{
    /**
     * @param GetTagKeysRequest $args
     * @return GetTagKeysResponse
     */
    public function getTagKeys(GetTagKeysRequest $args)
    {
        $result = parent::getTagKeys($args->toArray());
        return new GetTagKeysResponse($result->toArray());
    }
}
