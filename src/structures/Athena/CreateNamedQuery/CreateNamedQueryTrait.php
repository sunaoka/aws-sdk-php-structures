<?php

namespace Sunaoka\Aws\Structures\Athena\CreateNamedQuery;

trait CreateNamedQueryTrait
{
    /**
     * @param CreateNamedQueryRequest $args
     * @return CreateNamedQueryResponse
     */
    public function createNamedQuery(CreateNamedQueryRequest $args)
    {
        $result = parent::createNamedQuery($args->toArray());
        return new CreateNamedQueryResponse($result->toArray());
    }
}
