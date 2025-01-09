<?php

namespace Sunaoka\Aws\Structures\ServiceQuotas\ListServiceQuotaIncreaseRequestsInTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServiceCode
 * @property string $AwsRegion
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListServiceQuotaIncreaseRequestsInTemplateRequest extends Request
{
    /**
     * @param array{
     *     ServiceCode?: string,
     *     AwsRegion?: string,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
