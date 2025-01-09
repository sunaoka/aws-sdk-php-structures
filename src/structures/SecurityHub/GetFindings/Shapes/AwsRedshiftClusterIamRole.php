<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApplyStatus
 * @property string $IamRoleArn
 */
class AwsRedshiftClusterIamRole extends Shape
{
    /**
     * @param array{
     *     ApplyStatus?: string,
     *     IamRoleArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
