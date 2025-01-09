<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DeleteFirewall\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SubnetId
 * @property string $EndpointId
 * @property 'CREATING'|'DELETING'|'FAILED'|'ERROR'|'SCALING'|'READY' $Status
 * @property string $StatusMessage
 */
class Attachment extends Shape
{
    /**
     * @param array{
     *     SubnetId?: string,
     *     EndpointId?: string,
     *     Status?: 'CREATING'|'DELETING'|'FAILED'|'ERROR'|'SCALING'|'READY',
     *     StatusMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
