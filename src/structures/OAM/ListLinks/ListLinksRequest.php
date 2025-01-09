<?php

namespace Sunaoka\Aws\Structures\OAM\ListLinks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 5> $MaxResults
 * @property string $NextToken
 */
class ListLinksRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 5>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
