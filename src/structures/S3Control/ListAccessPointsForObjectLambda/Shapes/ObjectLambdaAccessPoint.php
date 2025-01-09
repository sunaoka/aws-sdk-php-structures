<?php

namespace Sunaoka\Aws\Structures\S3Control\ListAccessPointsForObjectLambda\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $ObjectLambdaAccessPointArn
 * @property ObjectLambdaAccessPointAlias $Alias
 */
class ObjectLambdaAccessPoint extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     ObjectLambdaAccessPointArn?: string,
     *     Alias?: ObjectLambdaAccessPointAlias
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
