<?php

namespace Sunaoka\Aws\Structures\SSMContacts\ListEngagements;

trait ListEngagementsTrait
{
    /**
     * @param ListEngagementsRequest $args
     * @return ListEngagementsResponse
     */
    public function listEngagements(ListEngagementsRequest $args)
    {
        $result = parent::listEngagements($args->toArray());
        return new ListEngagementsResponse($result->toArray());
    }
}
