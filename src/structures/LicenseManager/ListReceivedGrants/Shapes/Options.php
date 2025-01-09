<?php

namespace Sunaoka\Aws\Structures\LicenseManager\ListReceivedGrants\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DISTRIBUTED_GRANTS_ONLY'|'ALL_GRANTS_PERMITTED_BY_ISSUER' $ActivationOverrideBehavior
 */
class Options extends Shape
{
    /**
     * @param array{ActivationOverrideBehavior?: 'DISTRIBUTED_GRANTS_ONLY'|'ALL_GRANTS_PERMITTED_BY_ISSUER'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
