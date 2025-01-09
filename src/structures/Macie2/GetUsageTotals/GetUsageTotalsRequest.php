<?php

namespace Sunaoka\Aws\Structures\Macie2\GetUsageTotals;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $timeRange
 */
class GetUsageTotalsRequest extends Request
{
    /**
     * @param array{timeRange?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
