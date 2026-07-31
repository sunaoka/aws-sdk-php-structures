<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListTests;

trait ListTestsTrait
{
    /**
     * @param ListTestsRequest $args
     * @return ListTestsResponse
     */
    public function listTests(ListTestsRequest $args)
    {
        $result = parent::listTests($args->toArray());
        return new ListTestsResponse($result->toArray());
    }
}
