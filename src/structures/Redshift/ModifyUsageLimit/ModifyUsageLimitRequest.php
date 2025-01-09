<?php

namespace Sunaoka\Aws\Structures\Redshift\ModifyUsageLimit;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UsageLimitId
 * @property int $Amount
 * @property 'log'|'emit-metric'|'disable' $BreachAction
 */
class ModifyUsageLimitRequest extends Request
{
    /**
     * @param array{
     *     UsageLimitId: string,
     *     Amount?: int,
     *     BreachAction?: 'log'|'emit-metric'|'disable'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
