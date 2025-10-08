<?php

namespace Sunaoka\Aws\Structures\TimestreamQuery\ExecuteScheduledQuery;

trait ExecuteScheduledQueryTrait
{
    /**
     * @param ExecuteScheduledQueryRequest $args
     * @return void
     */
    public function executeScheduledQuery(ExecuteScheduledQueryRequest $args)
    {
        parent::executeScheduledQuery($args->toArray());
    }
}
