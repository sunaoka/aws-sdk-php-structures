<?php

namespace Sunaoka\Aws\Structures\Iot\ListSecurityProfilesForTarget\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 */
class SecurityProfileTarget extends Shape
{
    /**
     * @param array{arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
