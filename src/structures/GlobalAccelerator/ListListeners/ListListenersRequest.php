<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\ListListeners;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AcceleratorArn
 * @property int<1, 100> $MaxResults
 * @property string $NextToken
 */
class ListListenersRequest extends Request
{
    /**
     * @param array{
     *     AcceleratorArn: string,
     *     MaxResults?: int<1, 100>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
