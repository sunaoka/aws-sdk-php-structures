<?php

namespace Sunaoka\Aws\Structures\Panorama\CreatePackageImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BucketName
 * @property string $ObjectKey
 * @property string|null $Region
 */
class S3Location extends Shape
{
    /**
     * @param array{
     *     BucketName: string,
     *     ObjectKey: string,
     *     Region?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
