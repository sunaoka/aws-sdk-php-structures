<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\CancelQuery;

trait CancelQueryTrait
{
    /**
     * @param CancelQueryRequest $args
     * @return void
     */
    public function cancelQuery(CancelQueryRequest $args)
    {
        parent::cancelQuery($args->toArray());
    }
}
