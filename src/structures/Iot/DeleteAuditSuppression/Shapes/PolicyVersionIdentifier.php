<?php

namespace Sunaoka\Aws\Structures\Iot\DeleteAuditSuppression\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $policyName
 * @property string $policyVersionId
 */
class PolicyVersionIdentifier extends Shape
{
    /**
     * @param array{
     *     policyName?: string,
     *     policyVersionId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
