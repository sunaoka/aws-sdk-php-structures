<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListAnycastIpLists;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Marker
 * @property int $MaxItems
 */
class ListAnycastIpListsRequest extends Request
{
    /**
     * @param array{
     *     Marker?: string,
     *     MaxItems?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
