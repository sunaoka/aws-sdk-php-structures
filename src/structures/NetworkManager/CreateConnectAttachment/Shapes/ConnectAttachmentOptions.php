<?php

namespace Sunaoka\Aws\Structures\NetworkManager\CreateConnectAttachment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'GRE'|null $Protocol
 */
class ConnectAttachmentOptions extends Shape
{
    /**
     * @param array{Protocol?: 'GRE'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
