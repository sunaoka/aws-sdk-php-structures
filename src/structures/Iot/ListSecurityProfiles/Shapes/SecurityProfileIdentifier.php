<?php

namespace Sunaoka\Aws\Structures\Iot\ListSecurityProfiles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $arn
 */
class SecurityProfileIdentifier extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     arn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
