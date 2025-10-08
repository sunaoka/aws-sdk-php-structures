<?php

namespace Sunaoka\Aws\Structures\TimestreamQuery\UpdateScheduledQuery;

trait UpdateScheduledQueryTrait
{
    /**
     * @param UpdateScheduledQueryRequest $args
     * @return void
     */
    public function updateScheduledQuery(UpdateScheduledQueryRequest $args)
    {
        parent::updateScheduledQuery($args->toArray());
    }
}
