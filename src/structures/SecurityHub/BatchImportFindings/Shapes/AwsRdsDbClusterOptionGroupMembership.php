<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DbClusterOptionGroupName
 * @property string $Status
 */
class AwsRdsDbClusterOptionGroupMembership extends Shape
{
    /**
     * @param array{
     *     DbClusterOptionGroupName?: string,
     *     Status?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
