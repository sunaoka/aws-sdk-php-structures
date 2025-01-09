<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListDistributionsByWebACLId;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Marker
 * @property string $MaxItems
 * @property string $WebACLId
 */
class ListDistributionsByWebACLIdRequest extends Request
{
    /**
     * @param array{
     *     Marker?: string,
     *     MaxItems?: string,
     *     WebACLId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
