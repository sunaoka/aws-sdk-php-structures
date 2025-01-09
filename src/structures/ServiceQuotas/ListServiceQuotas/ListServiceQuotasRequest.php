<?php

namespace Sunaoka\Aws\Structures\ServiceQuotas\ListServiceQuotas;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServiceCode
 * @property string $NextToken
 * @property int $MaxResults
 * @property string $QuotaCode
 * @property 'ACCOUNT'|'RESOURCE'|'ALL' $QuotaAppliedAtLevel
 */
class ListServiceQuotasRequest extends Request
{
    /**
     * @param array{
     *     ServiceCode: string,
     *     NextToken?: string,
     *     MaxResults?: int,
     *     QuotaCode?: string,
     *     QuotaAppliedAtLevel?: 'ACCOUNT'|'RESOURCE'|'ALL'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
