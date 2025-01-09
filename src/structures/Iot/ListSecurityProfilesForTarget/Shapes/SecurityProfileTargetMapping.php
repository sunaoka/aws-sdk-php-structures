<?php

namespace Sunaoka\Aws\Structures\Iot\ListSecurityProfilesForTarget\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SecurityProfileIdentifier $securityProfileIdentifier
 * @property SecurityProfileTarget $target
 */
class SecurityProfileTargetMapping extends Shape
{
    /**
     * @param array{
     *     securityProfileIdentifier?: SecurityProfileIdentifier,
     *     target?: SecurityProfileTarget
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
