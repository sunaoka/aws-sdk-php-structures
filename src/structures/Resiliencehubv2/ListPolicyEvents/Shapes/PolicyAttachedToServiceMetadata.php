<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListPolicyEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $serviceArn
 * @property string|null $accountId
 */
class PolicyAttachedToServiceMetadata extends Shape
{
    /**
     * @param array{
     *     serviceArn?: string|null,
     *     accountId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
