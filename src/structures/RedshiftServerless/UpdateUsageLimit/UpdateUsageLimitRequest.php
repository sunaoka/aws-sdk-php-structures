<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\UpdateUsageLimit;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $amount
 * @property 'log'|'emit-metric'|'deactivate' $breachAction
 * @property string $usageLimitId
 */
class UpdateUsageLimitRequest extends Request
{
    /**
     * @param array{
     *     amount?: int,
     *     breachAction?: 'log'|'emit-metric'|'deactivate',
     *     usageLimitId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
