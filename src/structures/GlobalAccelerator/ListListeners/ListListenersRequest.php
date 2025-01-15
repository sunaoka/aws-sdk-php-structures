<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\ListListeners;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AcceleratorArn
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListListenersRequest extends Request
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
