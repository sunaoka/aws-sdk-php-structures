<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListAssertions;

trait ListAssertionsTrait
{
    /**
     * @param ListAssertionsRequest $args
     * @return ListAssertionsResponse
     */
    public function listAssertions(ListAssertionsRequest $args)
    {
        $result = parent::listAssertions($args->toArray());
        return new ListAssertionsResponse($result->toArray());
    }
}
