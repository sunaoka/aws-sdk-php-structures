<?php

namespace Sunaoka\Aws\Structures\S3Control\CreateAccessPointForObjectLambda\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'GetObject'|'HeadObject'|'ListObjects'|'ListObjectsV2'> $Actions
 * @property ObjectLambdaContentTransformation $ContentTransformation
 */
class ObjectLambdaTransformationConfiguration extends Shape
{
    /**
     * @param array{
     *     Actions: list<'GetObject'|'HeadObject'|'ListObjects'|'ListObjectsV2'>,
     *     ContentTransformation: ObjectLambdaContentTransformation
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
