<?php

namespace Sunaoka\Aws\Structures\Rds\RestoreDBClusterFromS3\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RoleArn
 * @property string|null $FeatureName
 */
class DBClusterAssociatedRole extends Shape
{
    /**
     * @param array{
     *     RoleArn: string,
     *     FeatureName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
