<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ModelPackageGroupArn
 * @property string|null $SourceModelPackageArn
 */
class ModelPackageConfig extends Shape
{
    /**
     * @param array{
     *     ModelPackageGroupArn: string,
     *     SourceModelPackageArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
