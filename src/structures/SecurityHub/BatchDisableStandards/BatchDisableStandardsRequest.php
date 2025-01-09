<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchDisableStandards;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $StandardsSubscriptionArns
 */
class BatchDisableStandardsRequest extends Request
{
    /**
     * @param array{StandardsSubscriptionArns: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
