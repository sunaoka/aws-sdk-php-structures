<?php

namespace Sunaoka\Aws\Structures\Connect\ListViews;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property 'CUSTOMER_MANAGED'|'AWS_MANAGED'|null $Type
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListViewsRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     Type?: 'CUSTOMER_MANAGED'|'AWS_MANAGED'|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
