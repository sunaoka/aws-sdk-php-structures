<?php

namespace Sunaoka\Aws\Structures\MediaConnect\ListBridges;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FilterArn
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListBridgesRequest extends Request
{
    /**
     * @param array{
     *     FilterArn?: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
