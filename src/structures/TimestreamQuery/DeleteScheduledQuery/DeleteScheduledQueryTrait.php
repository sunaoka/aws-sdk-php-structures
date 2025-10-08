<?php

namespace Sunaoka\Aws\Structures\TimestreamQuery\DeleteScheduledQuery;

trait DeleteScheduledQueryTrait
{
    /**
     * @param DeleteScheduledQueryRequest $args
     * @return void
     */
    public function deleteScheduledQuery(DeleteScheduledQueryRequest $args)
    {
        parent::deleteScheduledQuery($args->toArray());
    }
}
