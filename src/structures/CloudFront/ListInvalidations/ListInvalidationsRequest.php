<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListInvalidations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DistributionId
 * @property string $Marker
 * @property string $MaxItems
 */
class ListInvalidationsRequest extends Request
{
    /**
     * @param array{
     *     DistributionId: string,
     *     Marker?: string,
     *     MaxItems?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
