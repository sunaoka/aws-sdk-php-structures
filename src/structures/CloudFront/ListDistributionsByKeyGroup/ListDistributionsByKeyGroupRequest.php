<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListDistributionsByKeyGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Marker
 * @property string|null $MaxItems
 * @property string $KeyGroupId
 */
class ListDistributionsByKeyGroupRequest extends Request
{
    /**
     * @param array{
     *     Marker?: string|null,
     *     MaxItems?: string|null,
     *     KeyGroupId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
