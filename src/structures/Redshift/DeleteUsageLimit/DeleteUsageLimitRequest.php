<?php

namespace Sunaoka\Aws\Structures\Redshift\DeleteUsageLimit;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UsageLimitId
 */
class DeleteUsageLimitRequest extends Request
{
    /**
     * @param array{UsageLimitId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
