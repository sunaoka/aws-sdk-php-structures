<?php

namespace Sunaoka\Aws\Structures\Lambda\UpdateAlias;

trait UpdateAliasTrait
{
    /**
     * @param UpdateAliasRequest $args
     * @return UpdateAliasResponse
     */
    public function updateAlias(UpdateAliasRequest $args)
    {
        $result = parent::updateAlias($args->toArray());
        return new UpdateAliasResponse($result->toArray());
    }
}
