<?php

namespace Sunaoka\Aws\Structures\MailManager\ListIngressPoints;

trait ListIngressPointsTrait
{
    /**
     * @param ListIngressPointsRequest $args
     * @return ListIngressPointsResponse
     */
    public function listIngressPoints(ListIngressPointsRequest $args)
    {
        $result = parent::listIngressPoints($args->toArray());
        return new ListIngressPointsResponse($result->toArray());
    }
}
