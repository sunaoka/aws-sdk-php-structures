<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\UpdateSecurityConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $groupAttribute
 * @property string|null $userAttribute
 */
class IamFederationConfigOptions extends Shape
{
    /**
     * @param array{
     *     groupAttribute?: string|null,
     *     userAttribute?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
