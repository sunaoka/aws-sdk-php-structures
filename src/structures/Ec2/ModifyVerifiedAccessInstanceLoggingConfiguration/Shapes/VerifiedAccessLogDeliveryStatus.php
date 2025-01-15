<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVerifiedAccessInstanceLoggingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'success'|'failed'|null $Code
 * @property string|null $Message
 */
class VerifiedAccessLogDeliveryStatus extends Shape
{
    /**
     * @param array{
     *     Code?: 'success'|'failed'|null,
     *     Message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
