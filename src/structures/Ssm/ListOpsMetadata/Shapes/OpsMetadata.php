<?php

namespace Sunaoka\Aws\Structures\Ssm\ListOpsMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ResourceId
 * @property string|null $OpsMetadataArn
 * @property \Aws\Api\DateTimeResult|null $LastModifiedDate
 * @property string|null $LastModifiedUser
 * @property \Aws\Api\DateTimeResult|null $CreationDate
 */
class OpsMetadata extends Shape
{
    /**
     * @param array{
     *     ResourceId?: string|null,
     *     OpsMetadataArn?: string|null,
     *     LastModifiedDate?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedUser?: string|null,
     *     CreationDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
