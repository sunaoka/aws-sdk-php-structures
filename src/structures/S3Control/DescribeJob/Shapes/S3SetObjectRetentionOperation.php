<?php

namespace Sunaoka\Aws\Structures\S3Control\DescribeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $BypassGovernanceRetention
 * @property S3Retention $Retention
 */
class S3SetObjectRetentionOperation extends Shape
{
    /**
     * @param array{
     *     BypassGovernanceRetention?: bool,
     *     Retention: S3Retention
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
