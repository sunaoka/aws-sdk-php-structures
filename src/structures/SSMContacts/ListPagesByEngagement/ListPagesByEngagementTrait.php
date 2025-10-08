<?php

namespace Sunaoka\Aws\Structures\SSMContacts\ListPagesByEngagement;

trait ListPagesByEngagementTrait
{
    /**
     * @param ListPagesByEngagementRequest $args
     * @return ListPagesByEngagementResponse
     */
    public function listPagesByEngagement(ListPagesByEngagementRequest $args)
    {
        $result = parent::listPagesByEngagement($args->toArray());
        return new ListPagesByEngagementResponse($result->toArray());
    }
}
