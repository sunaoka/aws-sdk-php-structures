<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\UpdateEndpointGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EndpointId
 * @property int $Weight
 * @property bool $ClientIPPreservationEnabled
 * @property string $AttachmentArn
 */
class EndpointConfiguration extends Shape
{
    /**
     * @param array{
     *     EndpointId?: string,
     *     Weight?: int,
     *     ClientIPPreservationEnabled?: bool,
     *     AttachmentArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
