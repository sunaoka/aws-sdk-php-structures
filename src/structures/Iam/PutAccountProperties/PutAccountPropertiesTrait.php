<?php

namespace Sunaoka\Aws\Structures\Iam\PutAccountProperties;

trait PutAccountPropertiesTrait
{
    /**
     * @param PutAccountPropertiesRequest $args
     * @return PutAccountPropertiesResponse
     */
    public function putAccountProperties(PutAccountPropertiesRequest $args)
    {
        $result = parent::putAccountProperties($args->toArray());
        return new PutAccountPropertiesResponse($result->toArray());
    }
}
