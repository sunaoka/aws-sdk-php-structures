<?php

namespace Sunaoka\Aws\Structures\Transfer\TestConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $HostKey
 */
class SftpConnectorConnectionDetails extends Shape
{
    /**
     * @param array{HostKey?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
