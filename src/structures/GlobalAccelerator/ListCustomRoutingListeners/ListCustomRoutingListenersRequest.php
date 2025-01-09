<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\ListCustomRoutingListeners;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AcceleratorArn
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListCustomRoutingListenersRequest extends Request
{
    /**
     * @param array{
     *     AcceleratorArn: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
