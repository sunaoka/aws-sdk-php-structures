<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetCoreNetworkChangeEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EdgeLocation
 * @property string $SegmentName
 * @property string $NetworkFunctionGroupName
 * @property string $AttachmentId
 * @property string $Cidr
 */
class CoreNetworkChangeEventValues extends Shape
{
    /**
     * @param array{
     *     EdgeLocation?: string,
     *     SegmentName?: string,
     *     NetworkFunctionGroupName?: string,
     *     AttachmentId?: string,
     *     Cidr?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
