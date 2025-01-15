<?php

namespace Sunaoka\Aws\Structures\SecurityHub\DescribeStandardsControls;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StandardsSubscriptionArn
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class DescribeStandardsControlsRequest extends Request
{
    /**
     * @param array{
     *     StandardsSubscriptionArn: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
