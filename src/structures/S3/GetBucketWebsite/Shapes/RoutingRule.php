<?php

namespace Sunaoka\Aws\Structures\S3\GetBucketWebsite\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Condition|null $Condition
 * @property Redirect $Redirect
 */
class RoutingRule extends Shape
{
    /**
     * @param array{
     *     Condition?: Condition|null,
     *     Redirect: Redirect
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
