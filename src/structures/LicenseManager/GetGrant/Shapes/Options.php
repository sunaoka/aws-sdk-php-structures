<?php

namespace Sunaoka\Aws\Structures\LicenseManager\GetGrant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DISTRIBUTED_GRANTS_ONLY'|'ALL_GRANTS_PERMITTED_BY_ISSUER'|null $ActivationOverrideBehavior
 */
class Options extends Shape
{
    /**
     * @param array{ActivationOverrideBehavior?: 'DISTRIBUTED_GRANTS_ONLY'|'ALL_GRANTS_PERMITTED_BY_ISSUER'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
