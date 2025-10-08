<?php

namespace Sunaoka\Aws\Structures\QBusiness\ListRetrievers;

trait ListRetrieversTrait
{
    /**
     * @param ListRetrieversRequest $args
     * @return ListRetrieversResponse
     */
    public function listRetrievers(ListRetrieversRequest $args)
    {
        $result = parent::listRetrievers($args->toArray());
        return new ListRetrieversResponse($result->toArray());
    }
}
