<?php

namespace Sunaoka\Aws\Structures\S3Control\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $BypassGovernanceRetention
 * @property S3Retention $Retention
 */
class S3SetObjectRetentionOperation extends Shape
{
    /**
     * @param array{
     *     BypassGovernanceRetention?: bool|null,
     *     Retention: S3Retention
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
