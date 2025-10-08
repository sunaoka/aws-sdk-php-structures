<?php

namespace Sunaoka\Aws\Structures\Athena\DeleteNamedQuery;

trait DeleteNamedQueryTrait
{
    /**
     * @param DeleteNamedQueryRequest $args
     * @return DeleteNamedQueryResponse
     */
    public function deleteNamedQuery(DeleteNamedQueryRequest $args)
    {
        $result = parent::deleteNamedQuery($args->toArray());
        return new DeleteNamedQueryResponse($result->toArray());
    }
}
