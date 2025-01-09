<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateClientVpnEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DirectoryId
 */
class DirectoryServiceAuthenticationRequest extends Shape
{
    /**
     * @param array{DirectoryId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
