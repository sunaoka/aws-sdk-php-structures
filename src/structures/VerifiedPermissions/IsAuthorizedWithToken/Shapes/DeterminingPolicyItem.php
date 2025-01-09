<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\IsAuthorizedWithToken\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $policyId
 */
class DeterminingPolicyItem extends Shape
{
    /**
     * @param array{policyId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
