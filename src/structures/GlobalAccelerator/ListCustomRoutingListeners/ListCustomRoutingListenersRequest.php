<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\ListCustomRoutingListeners;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AcceleratorArn
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListCustomRoutingListenersRequest extends Request
{
    /**
     * @param array{
     *     AcceleratorArn: string,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
