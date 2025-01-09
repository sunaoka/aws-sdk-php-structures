<?php

namespace Sunaoka\Aws\Structures\Organizations\DescribeHandshake;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HandshakeId
 */
class DescribeHandshakeRequest extends Request
{
    /**
     * @param array{HandshakeId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
