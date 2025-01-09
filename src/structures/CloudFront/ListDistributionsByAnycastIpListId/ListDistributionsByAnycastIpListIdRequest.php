<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListDistributionsByAnycastIpListId;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Marker
 * @property string $MaxItems
 * @property string $AnycastIpListId
 */
class ListDistributionsByAnycastIpListIdRequest extends Request
{
    /**
     * @param array{
     *     Marker?: string,
     *     MaxItems?: string,
     *     AnycastIpListId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
