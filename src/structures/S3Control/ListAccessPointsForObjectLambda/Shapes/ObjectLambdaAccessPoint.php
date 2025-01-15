<?php

namespace Sunaoka\Aws\Structures\S3Control\ListAccessPointsForObjectLambda\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string|null $ObjectLambdaAccessPointArn
 * @property ObjectLambdaAccessPointAlias|null $Alias
 */
class ObjectLambdaAccessPoint extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     ObjectLambdaAccessPointArn?: string|null,
     *     Alias?: ObjectLambdaAccessPointAlias|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
