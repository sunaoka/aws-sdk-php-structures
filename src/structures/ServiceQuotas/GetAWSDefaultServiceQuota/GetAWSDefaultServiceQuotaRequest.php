<?php

namespace Sunaoka\Aws\Structures\ServiceQuotas\GetAWSDefaultServiceQuota;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServiceCode
 * @property string $QuotaCode
 */
class GetAWSDefaultServiceQuotaRequest extends Request
{
    /**
     * @param array{
     *     ServiceCode: string,
     *     QuotaCode: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
