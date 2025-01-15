<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListDistributionsByAnycastIpListId;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Marker
 * @property string|null $MaxItems
 * @property string $AnycastIpListId
 */
class ListDistributionsByAnycastIpListIdRequest extends Request
{
    /**
     * @param array{
     *     Marker?: string|null,
     *     MaxItems?: string|null,
     *     AnycastIpListId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
