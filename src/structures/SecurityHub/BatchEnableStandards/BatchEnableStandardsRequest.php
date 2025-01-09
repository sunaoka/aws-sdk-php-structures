<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchEnableStandards;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\StandardsSubscriptionRequest> $StandardsSubscriptionRequests
 */
class BatchEnableStandardsRequest extends Request
{
    /**
     * @param array{StandardsSubscriptionRequests: list<Shapes\StandardsSubscriptionRequest>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
