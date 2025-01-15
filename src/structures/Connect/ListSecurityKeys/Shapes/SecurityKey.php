<?php

namespace Sunaoka\Aws\Structures\Connect\ListSecurityKeys\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AssociationId
 * @property string|null $Key
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 */
class SecurityKey extends Shape
{
    /**
     * @param array{
     *     AssociationId?: string|null,
     *     Key?: string|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
