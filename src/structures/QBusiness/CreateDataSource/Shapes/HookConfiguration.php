<?php

namespace Sunaoka\Aws\Structures\QBusiness\CreateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DocumentAttributeCondition $invocationCondition
 * @property string $lambdaArn
 * @property string $s3BucketName
 * @property string $roleArn
 */
class HookConfiguration extends Shape
{
    /**
     * @param array{
     *     invocationCondition?: DocumentAttributeCondition,
     *     lambdaArn?: string,
     *     s3BucketName?: string,
     *     roleArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
