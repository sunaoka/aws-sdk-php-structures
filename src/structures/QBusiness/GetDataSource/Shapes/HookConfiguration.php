<?php

namespace Sunaoka\Aws\Structures\QBusiness\GetDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DocumentAttributeCondition|null $invocationCondition
 * @property string|null $lambdaArn
 * @property string|null $s3BucketName
 * @property string|null $roleArn
 */
class HookConfiguration extends Shape
{
    /**
     * @param array{
     *     invocationCondition?: DocumentAttributeCondition|null,
     *     lambdaArn?: string|null,
     *     s3BucketName?: string|null,
     *     roleArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
