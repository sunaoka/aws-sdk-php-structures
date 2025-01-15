<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\UpdateEndpointGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $EndpointId
 * @property int<0, 255>|null $Weight
 * @property bool|null $ClientIPPreservationEnabled
 * @property string|null $AttachmentArn
 */
class EndpointConfiguration extends Shape
{
    /**
     * @param array{
     *     EndpointId?: string|null,
     *     Weight?: int<0, 255>|null,
     *     ClientIPPreservationEnabled?: bool|null,
     *     AttachmentArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
