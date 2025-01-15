<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListInvalidations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DistributionId
 * @property string|null $Marker
 * @property string|null $MaxItems
 */
class ListInvalidationsRequest extends Request
{
    /**
     * @param array{
     *     DistributionId: string,
     *     Marker?: string|null,
     *     MaxItems?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
