<?php

namespace Sunaoka\Aws\Structures\Outposts\ListOutposts;

trait ListOutpostsTrait
{
    /**
     * @param ListOutpostsRequest $args
     * @return ListOutpostsResponse
     */
    public function listOutposts(ListOutpostsRequest $args)
    {
        $result = parent::listOutposts($args->toArray());
        return new ListOutpostsResponse($result->toArray());
    }
}
