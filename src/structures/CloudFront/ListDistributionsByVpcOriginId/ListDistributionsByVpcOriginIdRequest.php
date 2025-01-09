<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListDistributionsByVpcOriginId;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Marker
 * @property string $MaxItems
 * @property string $VpcOriginId
 */
class ListDistributionsByVpcOriginIdRequest extends Request
{
    /**
     * @param array{
     *     Marker?: string,
     *     MaxItems?: string,
     *     VpcOriginId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
