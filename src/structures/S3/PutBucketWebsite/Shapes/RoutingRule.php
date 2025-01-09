<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketWebsite\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Condition $Condition
 * @property Redirect $Redirect
 */
class RoutingRule extends Shape
{
    /**
     * @param array{
     *     Condition?: Condition,
     *     Redirect: Redirect
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
