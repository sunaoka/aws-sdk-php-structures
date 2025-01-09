<?php

namespace Sunaoka\Aws\Structures\NetworkManager\PutCoreNetworkPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ErrorCode
 * @property string $Message
 * @property string $Path
 */
class CoreNetworkPolicyError extends Shape
{
    /**
     * @param array{
     *     ErrorCode: string,
     *     Message: string,
     *     Path?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
