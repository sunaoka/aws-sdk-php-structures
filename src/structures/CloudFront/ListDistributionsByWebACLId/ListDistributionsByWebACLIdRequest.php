<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListDistributionsByWebACLId;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Marker
 * @property string|null $MaxItems
 * @property string $WebACLId
 */
class ListDistributionsByWebACLIdRequest extends Request
{
    /**
     * @param array{
     *     Marker?: string|null,
     *     MaxItems?: string|null,
     *     WebACLId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
