<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\StartChangeSet;

trait StartChangeSetTrait
{
    /**
     * @param StartChangeSetRequest $args
     * @return StartChangeSetResponse
     */
    public function startChangeSet(StartChangeSetRequest $args)
    {
        $result = parent::startChangeSet($args->toArray());
        return new StartChangeSetResponse($result->toArray());
    }
}
