<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListDistributionsByVpcOriginId;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Marker
 * @property string|null $MaxItems
 * @property string $VpcOriginId
 */
class ListDistributionsByVpcOriginIdRequest extends Request
{
    /**
     * @param array{
     *     Marker?: string|null,
     *     MaxItems?: string|null,
     *     VpcOriginId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
