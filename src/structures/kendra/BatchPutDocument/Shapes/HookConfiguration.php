<?php

namespace Sunaoka\Aws\Structures\kendra\BatchPutDocument\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DocumentAttributeCondition|null $InvocationCondition
 * @property string $LambdaArn
 * @property string $S3Bucket
 */
class HookConfiguration extends Shape
{
    /**
     * @param array{
     *     InvocationCondition?: DocumentAttributeCondition|null,
     *     LambdaArn: string,
     *     S3Bucket: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
