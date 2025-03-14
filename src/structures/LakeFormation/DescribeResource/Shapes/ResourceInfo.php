<?php

namespace Sunaoka\Aws\Structures\LakeFormation\DescribeResource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ResourceArn
 * @property string|null $RoleArn
 * @property \Aws\Api\DateTimeResult|null $LastModified
 * @property bool|null $WithFederation
 * @property bool|null $HybridAccessEnabled
 * @property bool|null $WithPrivilegedAccess
 */
class ResourceInfo extends Shape
{
    /**
     * @param array{
     *     ResourceArn?: string|null,
     *     RoleArn?: string|null,
     *     LastModified?: \Aws\Api\DateTimeResult|null,
     *     WithFederation?: bool|null,
     *     HybridAccessEnabled?: bool|null,
     *     WithPrivilegedAccess?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
