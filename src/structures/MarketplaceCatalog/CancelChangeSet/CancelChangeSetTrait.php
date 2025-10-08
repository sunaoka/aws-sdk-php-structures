<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\CancelChangeSet;

trait CancelChangeSetTrait
{
    /**
     * @param CancelChangeSetRequest $args
     * @return CancelChangeSetResponse
     */
    public function cancelChangeSet(CancelChangeSetRequest $args)
    {
        $result = parent::cancelChangeSet($args->toArray());
        return new CancelChangeSetResponse($result->toArray());
    }
}
