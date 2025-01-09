<?php

namespace Sunaoka\Aws\Structures\OAM\ListAttachedLinks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 1000> $MaxResults
 * @property string $NextToken
 * @property string $SinkIdentifier
 */
class ListAttachedLinksRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 1000>,
     *     NextToken?: string,
     *     SinkIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
