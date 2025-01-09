<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListDistributionsByKeyGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Marker
 * @property string $MaxItems
 * @property string $KeyGroupId
 */
class ListDistributionsByKeyGroupRequest extends Request
{
    /**
     * @param array{
     *     Marker?: string,
     *     MaxItems?: string,
     *     KeyGroupId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
