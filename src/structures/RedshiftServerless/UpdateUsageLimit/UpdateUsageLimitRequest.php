<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\UpdateUsageLimit;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int|null $amount
 * @property 'log'|'emit-metric'|'deactivate'|null $breachAction
 * @property string $usageLimitId
 */
class UpdateUsageLimitRequest extends Request
{
    /**
     * @param array{
     *     amount?: int|null,
     *     breachAction?: 'log'|'emit-metric'|'deactivate'|null,
     *     usageLimitId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
