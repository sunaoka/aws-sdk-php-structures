<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RoleArn
 * @property string|null $FeatureName
 * @property string|null $Status
 */
class AwsRdsDbInstanceAssociatedRole extends Shape
{
    /**
     * @param array{
     *     RoleArn?: string|null,
     *     FeatureName?: string|null,
     *     Status?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
