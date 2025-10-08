<?php

namespace Sunaoka\Aws\Structures\Glue\GetTableVersion;

trait GetTableVersionTrait
{
    /**
     * @param GetTableVersionRequest $args
     * @return GetTableVersionResponse
     */
    public function getTableVersion(GetTableVersionRequest $args)
    {
        $result = parent::getTableVersion($args->toArray());
        return new GetTableVersionResponse($result->toArray());
    }
}
