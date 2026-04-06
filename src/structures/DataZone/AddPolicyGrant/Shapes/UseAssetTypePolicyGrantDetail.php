<?php

namespace Sunaoka\Aws\Structures\DataZone\AddPolicyGrant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $domainUnitId
 */
class UseAssetTypePolicyGrantDetail extends Shape
{
    /**
     * @param array{domainUnitId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
