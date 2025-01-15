<?php

namespace Sunaoka\Aws\Structures\S3Control\CreateAccessPointForObjectLambda\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Value
 * @property 'PROVISIONING'|'READY'|null $Status
 */
class ObjectLambdaAccessPointAlias extends Shape
{
    /**
     * @param array{
     *     Value?: string|null,
     *     Status?: 'PROVISIONING'|'READY'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
