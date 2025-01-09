<?php

namespace Sunaoka\Aws\Structures\S3Control\ListAccessGrantsInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AccessGrantsInstanceId
 * @property string $AccessGrantsInstanceArn
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property string $IdentityCenterArn
 * @property string $IdentityCenterInstanceArn
 * @property string $IdentityCenterApplicationArn
 */
class ListAccessGrantsInstanceEntry extends Shape
{
    /**
     * @param array{
     *     AccessGrantsInstanceId?: string,
     *     AccessGrantsInstanceArn?: string,
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     IdentityCenterArn?: string,
     *     IdentityCenterInstanceArn?: string,
     *     IdentityCenterApplicationArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
