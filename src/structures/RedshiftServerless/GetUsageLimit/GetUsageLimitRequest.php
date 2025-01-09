<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\GetUsageLimit;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $usageLimitId
 */
class GetUsageLimitRequest extends Request
{
    /**
     * @param array{usageLimitId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
