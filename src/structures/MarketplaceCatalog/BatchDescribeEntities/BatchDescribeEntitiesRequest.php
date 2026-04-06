<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\BatchDescribeEntities;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\EntityRequest> $EntityRequestList
 */
class BatchDescribeEntitiesRequest extends Request
{
    /**
     * @param array{EntityRequestList: list<Shapes\EntityRequest>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
