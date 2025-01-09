<?php

namespace Sunaoka\Aws\Structures\LakeFormation\DescribeResource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResourceArn
 * @property string $RoleArn
 * @property \Aws\Api\DateTimeResult $LastModified
 * @property bool $WithFederation
 * @property bool $HybridAccessEnabled
 */
class ResourceInfo extends Shape
{
    /**
     * @param array{
     *     ResourceArn?: string,
     *     RoleArn?: string,
     *     LastModified?: \Aws\Api\DateTimeResult,
     *     WithFederation?: bool,
     *     HybridAccessEnabled?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
