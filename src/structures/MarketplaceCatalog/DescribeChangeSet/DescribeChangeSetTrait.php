<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\DescribeChangeSet;

trait DescribeChangeSetTrait
{
    /**
     * @param DescribeChangeSetRequest $args
     * @return DescribeChangeSetResponse
     */
    public function describeChangeSet(DescribeChangeSetRequest $args)
    {
        $result = parent::describeChangeSet($args->toArray());
        return new DescribeChangeSetResponse($result->toArray());
    }
}
