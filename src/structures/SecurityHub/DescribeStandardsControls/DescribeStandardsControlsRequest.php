<?php

namespace Sunaoka\Aws\Structures\SecurityHub\DescribeStandardsControls;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StandardsSubscriptionArn
 * @property string $NextToken
 * @property int $MaxResults
 */
class DescribeStandardsControlsRequest extends Request
{
    /**
     * @param array{
     *     StandardsSubscriptionArn: string,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
