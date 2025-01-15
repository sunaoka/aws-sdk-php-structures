<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListDistributions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Marker
 * @property string|null $MaxItems
 */
class ListDistributionsRequest extends Request
{
    /**
     * @param array{
     *     Marker?: string|null,
     *     MaxItems?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
