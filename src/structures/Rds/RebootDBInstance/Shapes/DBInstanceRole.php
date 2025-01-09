<?php

namespace Sunaoka\Aws\Structures\Rds\RebootDBInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RoleArn
 * @property string $FeatureName
 * @property string $Status
 */
class DBInstanceRole extends Shape
{
    /**
     * @param array{
     *     RoleArn?: string,
     *     FeatureName?: string,
     *     Status?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
