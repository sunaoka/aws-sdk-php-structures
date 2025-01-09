<?php

namespace Sunaoka\Aws\Structures\MediaConnect\ListEntitlements;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 1000> $MaxResults
 * @property string $NextToken
 */
class ListEntitlementsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 1000>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
