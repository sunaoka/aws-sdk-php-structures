<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\AddEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EndpointId
 * @property int<0, 255> $Weight
 * @property bool $ClientIPPreservationEnabled
 * @property string $AttachmentArn
 */
class EndpointConfiguration extends Shape
{
    /**
     * @param array{
     *     EndpointId?: string,
     *     Weight?: int<0, 255>,
     *     ClientIPPreservationEnabled?: bool,
     *     AttachmentArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
