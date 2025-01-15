<?php

namespace Sunaoka\Aws\Structures\S3Control\ListAccessGrantsInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AccessGrantsInstanceId
 * @property string|null $AccessGrantsInstanceArn
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property string|null $IdentityCenterArn
 * @property string|null $IdentityCenterInstanceArn
 * @property string|null $IdentityCenterApplicationArn
 */
class ListAccessGrantsInstanceEntry extends Shape
{
    /**
     * @param array{
     *     AccessGrantsInstanceId?: string|null,
     *     AccessGrantsInstanceArn?: string|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     IdentityCenterArn?: string|null,
     *     IdentityCenterInstanceArn?: string|null,
     *     IdentityCenterApplicationArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
