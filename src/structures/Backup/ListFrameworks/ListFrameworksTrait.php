<?php

namespace Sunaoka\Aws\Structures\Backup\ListFrameworks;

trait ListFrameworksTrait
{
    /**
     * @param ListFrameworksRequest $args
     * @return ListFrameworksResponse
     */
    public function listFrameworks(ListFrameworksRequest $args)
    {
        $result = parent::listFrameworks($args->toArray());
        return new ListFrameworksResponse($result->toArray());
    }
}
