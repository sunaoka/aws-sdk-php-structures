<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetConnectAttachment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'GRE'|'NO_ENCAP'|null $Protocol
 */
class ConnectAttachmentOptions extends Shape
{
    /**
     * @param array{Protocol?: 'GRE'|'NO_ENCAP'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
