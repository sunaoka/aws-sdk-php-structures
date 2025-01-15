<?php

namespace Sunaoka\Aws\Structures\Iot\ListSecurityProfilesForTarget\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SecurityProfileIdentifier|null $securityProfileIdentifier
 * @property SecurityProfileTarget|null $target
 */
class SecurityProfileTargetMapping extends Shape
{
    /**
     * @param array{
     *     securityProfileIdentifier?: SecurityProfileIdentifier|null,
     *     target?: SecurityProfileTarget|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
