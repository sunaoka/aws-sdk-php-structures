<?php

namespace Sunaoka\Aws\Structures\ServiceQuotas\ListServiceQuotaIncreaseRequestsInTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ServiceCode
 * @property string|null $AwsRegion
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListServiceQuotaIncreaseRequestsInTemplateRequest extends Request
{
    /**
     * @param array{
     *     ServiceCode?: string|null,
     *     AwsRegion?: string|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
