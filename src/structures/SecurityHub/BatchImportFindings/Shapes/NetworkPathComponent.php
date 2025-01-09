<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ComponentId
 * @property string $ComponentType
 * @property NetworkHeader $Egress
 * @property NetworkHeader $Ingress
 */
class NetworkPathComponent extends Shape
{
    /**
     * @param array{
     *     ComponentId?: string,
     *     ComponentType?: string,
     *     Egress?: NetworkHeader,
     *     Ingress?: NetworkHeader
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
