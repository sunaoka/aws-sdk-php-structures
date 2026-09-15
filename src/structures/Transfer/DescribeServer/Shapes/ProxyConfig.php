<?php

namespace Sunaoka\Aws\Structures\Transfer\DescribeServer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NONE'|'PROXY_PROTOCOL_V2_ENFORCED'|null $SftpMode
 */
class ProxyConfig extends Shape
{
    /**
     * @param array{SftpMode?: 'NONE'|'PROXY_PROTOCOL_V2_ENFORCED'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
