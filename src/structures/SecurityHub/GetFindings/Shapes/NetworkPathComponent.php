<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ComponentId
 * @property string|null $ComponentType
 * @property NetworkHeader|null $Egress
 * @property NetworkHeader|null $Ingress
 */
class NetworkPathComponent extends Shape
{
    /**
     * @param array{
     *     ComponentId?: string|null,
     *     ComponentType?: string|null,
     *     Egress?: NetworkHeader|null,
     *     Ingress?: NetworkHeader|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
