<?php

namespace Sunaoka\Aws\Structures\ServiceQuotas\GetServiceQuota;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServiceCode
 * @property string $QuotaCode
 * @property string|null $ContextId
 */
class GetServiceQuotaRequest extends Request
{
    /**
     * @param array{
     *     ServiceCode: string,
     *     QuotaCode: string,
     *     ContextId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
