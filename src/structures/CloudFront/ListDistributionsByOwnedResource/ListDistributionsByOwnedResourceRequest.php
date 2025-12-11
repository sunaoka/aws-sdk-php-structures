<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListDistributionsByOwnedResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 * @property string|null $Marker
 * @property string|null $MaxItems
 */
class ListDistributionsByOwnedResourceRequest extends Request
{
    /**
     * @param array{
     *     ResourceArn: string,
     *     Marker?: string|null,
     *     MaxItems?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
