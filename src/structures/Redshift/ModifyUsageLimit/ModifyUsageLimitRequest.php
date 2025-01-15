<?php

namespace Sunaoka\Aws\Structures\Redshift\ModifyUsageLimit;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UsageLimitId
 * @property int|null $Amount
 * @property 'log'|'emit-metric'|'disable'|null $BreachAction
 */
class ModifyUsageLimitRequest extends Request
{
    /**
     * @param array{
     *     UsageLimitId: string,
     *     Amount?: int|null,
     *     BreachAction?: 'log'|'emit-metric'|'disable'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
