<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DescribeVpcEndpointAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Attachment|null $Attachment
 */
class AZSyncState extends Shape
{
    /**
     * @param array{Attachment?: Attachment|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
