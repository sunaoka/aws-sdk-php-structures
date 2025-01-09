<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\ListAccelerators;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100> $MaxResults
 * @property string $NextToken
 */
class ListAcceleratorsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 100>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
