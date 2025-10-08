<?php

namespace Sunaoka\Aws\Structures\Macie2\CreateAllowList;

trait CreateAllowListTrait
{
    /**
     * @param CreateAllowListRequest $args
     * @return CreateAllowListResponse
     */
    public function createAllowList(CreateAllowListRequest $args)
    {
        $result = parent::createAllowList($args->toArray());
        return new CreateAllowListResponse($result->toArray());
    }
}
