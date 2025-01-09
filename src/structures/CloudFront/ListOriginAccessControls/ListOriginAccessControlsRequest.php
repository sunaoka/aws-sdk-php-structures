<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListOriginAccessControls;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Marker
 * @property string $MaxItems
 */
class ListOriginAccessControlsRequest extends Request
{
    /**
     * @param array{
     *     Marker?: string,
     *     MaxItems?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
