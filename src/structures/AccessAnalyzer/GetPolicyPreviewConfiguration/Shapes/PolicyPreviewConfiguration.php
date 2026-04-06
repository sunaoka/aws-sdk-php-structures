<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\GetPolicyPreviewConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'GLOBAL' $scope
 * @property 'ACTIVE'|'PENDING_CREATION'|'FAILED' $status
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class PolicyPreviewConfiguration extends Shape
{
    /**
     * @param array{
     *     scope: 'GLOBAL',
     *     status: 'ACTIVE'|'PENDING_CREATION'|'FAILED',
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
