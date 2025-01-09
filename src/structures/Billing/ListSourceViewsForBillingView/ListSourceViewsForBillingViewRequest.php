<?php

namespace Sunaoka\Aws\Structures\Billing\ListSourceViewsForBillingView;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 * @property int<1, 100> $maxResults
 * @property string $nextToken
 */
class ListSourceViewsForBillingViewRequest extends Request
{
    /**
     * @param array{
     *     arn: string,
     *     maxResults?: int<1, 100>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
