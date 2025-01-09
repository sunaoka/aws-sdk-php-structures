<?php

namespace Sunaoka\Aws\Structures\S3Control\CreateAccessPointForObjectLambda\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Value
 * @property 'PROVISIONING'|'READY' $Status
 */
class ObjectLambdaAccessPointAlias extends Shape
{
    /**
     * @param array{
     *     Value?: string,
     *     Status?: 'PROVISIONING'|'READY'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
