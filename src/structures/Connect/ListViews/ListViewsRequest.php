<?php

namespace Sunaoka\Aws\Structures\Connect\ListViews;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property 'CUSTOMER_MANAGED'|'AWS_MANAGED' $Type
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 */
class ListViewsRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     Type?: 'CUSTOMER_MANAGED'|'AWS_MANAGED',
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
