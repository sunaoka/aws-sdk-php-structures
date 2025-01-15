<?php

namespace Sunaoka\Aws\Structures\NetworkManager\RestoreCoreNetworkPolicyVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ErrorCode
 * @property string $Message
 * @property string|null $Path
 */
class CoreNetworkPolicyError extends Shape
{
    /**
     * @param array{
     *     ErrorCode: string,
     *     Message: string,
     *     Path?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
