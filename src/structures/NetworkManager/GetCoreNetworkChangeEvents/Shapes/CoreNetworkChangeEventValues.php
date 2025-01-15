<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetCoreNetworkChangeEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $EdgeLocation
 * @property string|null $SegmentName
 * @property string|null $NetworkFunctionGroupName
 * @property string|null $AttachmentId
 * @property string|null $Cidr
 */
class CoreNetworkChangeEventValues extends Shape
{
    /**
     * @param array{
     *     EdgeLocation?: string|null,
     *     SegmentName?: string|null,
     *     NetworkFunctionGroupName?: string|null,
     *     AttachmentId?: string|null,
     *     Cidr?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
