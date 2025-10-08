<?php

namespace Sunaoka\Aws\Structures\Athena\GetNamedQuery;

trait GetNamedQueryTrait
{
    /**
     * @param GetNamedQueryRequest $args
     * @return GetNamedQueryResponse
     */
    public function getNamedQuery(GetNamedQueryRequest $args)
    {
        $result = parent::getNamedQuery($args->toArray());
        return new GetNamedQueryResponse($result->toArray());
    }
}
