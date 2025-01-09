<?php

namespace Sunaoka\Aws\Structures\Ssm\ListOpsMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResourceId
 * @property string $OpsMetadataArn
 * @property \Aws\Api\DateTimeResult $LastModifiedDate
 * @property string $LastModifiedUser
 * @property \Aws\Api\DateTimeResult $CreationDate
 */
class OpsMetadata extends Shape
{
    /**
     * @param array{
     *     ResourceId?: string,
     *     OpsMetadataArn?: string,
     *     LastModifiedDate?: \Aws\Api\DateTimeResult,
     *     LastModifiedUser?: string,
     *     CreationDate?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
