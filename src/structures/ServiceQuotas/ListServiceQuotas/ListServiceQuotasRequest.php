<?php

namespace Sunaoka\Aws\Structures\ServiceQuotas\ListServiceQuotas;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServiceCode
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 * @property string|null $QuotaCode
 * @property 'ACCOUNT'|'RESOURCE'|'ALL'|null $QuotaAppliedAtLevel
 */
class ListServiceQuotasRequest extends Request
{
    /**
     * @param array{
     *     ServiceCode: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     QuotaCode?: string|null,
     *     QuotaAppliedAtLevel?: 'ACCOUNT'|'RESOURCE'|'ALL'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
