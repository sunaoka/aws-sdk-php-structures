<?php

namespace Sunaoka\Aws\Structures\Connect\ListSecurityKeys\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AssociationId
 * @property string $Key
 * @property \Aws\Api\DateTimeResult $CreationTime
 */
class SecurityKey extends Shape
{
    /**
     * @param array{
     *     AssociationId?: string,
     *     Key?: string,
     *     CreationTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
