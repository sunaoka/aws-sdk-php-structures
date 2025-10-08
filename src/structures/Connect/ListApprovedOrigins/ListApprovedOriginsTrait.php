<?php

namespace Sunaoka\Aws\Structures\Connect\ListApprovedOrigins;

trait ListApprovedOriginsTrait
{
    /**
     * @param ListApprovedOriginsRequest $args
     * @return ListApprovedOriginsResponse
     */
    public function listApprovedOrigins(ListApprovedOriginsRequest $args)
    {
        $result = parent::listApprovedOrigins($args->toArray());
        return new ListApprovedOriginsResponse($result->toArray());
    }
}
