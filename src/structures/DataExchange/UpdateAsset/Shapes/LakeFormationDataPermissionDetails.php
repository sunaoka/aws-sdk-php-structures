<?php

namespace Sunaoka\Aws\Structures\DataExchange\UpdateAsset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LFTagPolicyDetails|null $LFTagPolicy
 */
class LakeFormationDataPermissionDetails extends Shape
{
    /**
     * @param array{LFTagPolicy?: LFTagPolicyDetails|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
