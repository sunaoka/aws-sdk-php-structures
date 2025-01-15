<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DescribeFirewall\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SubnetId
 * @property string|null $EndpointId
 * @property 'CREATING'|'DELETING'|'FAILED'|'ERROR'|'SCALING'|'READY'|null $Status
 * @property string|null $StatusMessage
 */
class Attachment extends Shape
{
    /**
     * @param array{
     *     SubnetId?: string|null,
     *     EndpointId?: string|null,
     *     Status?: 'CREATING'|'DELETING'|'FAILED'|'ERROR'|'SCALING'|'READY'|null,
     *     StatusMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
