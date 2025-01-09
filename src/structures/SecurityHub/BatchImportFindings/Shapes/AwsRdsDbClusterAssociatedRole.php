<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RoleArn
 * @property string $Status
 */
class AwsRdsDbClusterAssociatedRole extends Shape
{
    /**
     * @param array{
     *     RoleArn?: string,
     *     Status?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
