<?php

namespace Sunaoka\Aws\Structures\Connect\ListMetrics;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property 'AWS_MANAGED'|'CUSTOMER_MANAGED'|null $Type
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListMetricsRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     Type?: 'AWS_MANAGED'|'CUSTOMER_MANAGED'|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
