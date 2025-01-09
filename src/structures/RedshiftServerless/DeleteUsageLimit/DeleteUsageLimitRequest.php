<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\DeleteUsageLimit;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $usageLimitId
 */
class DeleteUsageLimitRequest extends Request
{
    /**
     * @param array{usageLimitId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
