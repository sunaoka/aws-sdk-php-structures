<?php

namespace Sunaoka\Aws\Structures\Athena\UpdateNamedQuery;

trait UpdateNamedQueryTrait
{
    /**
     * @param UpdateNamedQueryRequest $args
     * @return UpdateNamedQueryResponse
     */
    public function updateNamedQuery(UpdateNamedQueryRequest $args)
    {
        $result = parent::updateNamedQuery($args->toArray());
        return new UpdateNamedQueryResponse($result->toArray());
    }
}
