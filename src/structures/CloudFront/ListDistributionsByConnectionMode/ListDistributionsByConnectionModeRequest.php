<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListDistributionsByConnectionMode;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Marker
 * @property int|null $MaxItems
 * @property 'direct'|'tenant-only' $ConnectionMode
 */
class ListDistributionsByConnectionModeRequest extends Request
{
    /**
     * @param array{
     *     Marker?: string|null,
     *     MaxItems?: int|null,
     *     ConnectionMode: 'direct'|'tenant-only'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
