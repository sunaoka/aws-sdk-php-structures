<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DbClusterOptionGroupName
 * @property string|null $Status
 */
class AwsRdsDbClusterOptionGroupMembership extends Shape
{
    /**
     * @param array{
     *     DbClusterOptionGroupName?: string|null,
     *     Status?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
