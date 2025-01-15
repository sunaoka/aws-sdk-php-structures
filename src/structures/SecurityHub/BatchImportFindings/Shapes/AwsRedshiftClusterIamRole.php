<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ApplyStatus
 * @property string|null $IamRoleArn
 */
class AwsRedshiftClusterIamRole extends Shape
{
    /**
     * @param array{
     *     ApplyStatus?: string|null,
     *     IamRoleArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
