<?php

namespace Sunaoka\Aws\Structures\ServiceQuotas\RequestServiceQuotaIncrease;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServiceCode
 * @property string $QuotaCode
 * @property double $DesiredValue
 * @property string $ContextId
 */
class RequestServiceQuotaIncreaseRequest extends Request
{
    /**
     * @param array{
     *     ServiceCode: string,
     *     QuotaCode: string,
     *     DesiredValue: double,
     *     ContextId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
