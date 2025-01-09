<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListKeyGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Marker
 * @property string $MaxItems
 */
class ListKeyGroupsRequest extends Request
{
    /**
     * @param array{
     *     Marker?: string,
     *     MaxItems?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
