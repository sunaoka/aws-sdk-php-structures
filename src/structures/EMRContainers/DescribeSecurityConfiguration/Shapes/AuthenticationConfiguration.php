<?php

namespace Sunaoka\Aws\Structures\EMRContainers\DescribeSecurityConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IdentityCenterConfiguration|null $identityCenterConfiguration
 * @property IAMConfiguration|null $iamConfiguration
 */
class AuthenticationConfiguration extends Shape
{
    /**
     * @param array{
     *     identityCenterConfiguration?: IdentityCenterConfiguration|null,
     *     iamConfiguration?: IAMConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
