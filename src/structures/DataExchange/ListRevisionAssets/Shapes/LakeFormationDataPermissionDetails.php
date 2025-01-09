<?php

namespace Sunaoka\Aws\Structures\DataExchange\ListRevisionAssets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LFTagPolicyDetails $LFTagPolicy
 */
class LakeFormationDataPermissionDetails extends Shape
{
    /**
     * @param array{LFTagPolicy?: LFTagPolicyDetails} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
