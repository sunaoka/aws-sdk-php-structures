<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BucketName
 * @property string $ObjectKey
 * @property string $Region
 */
class StaticFileS3SourceOptions extends Shape
{
    /**
     * @param array{
     *     BucketName: string,
     *     ObjectKey: string,
     *     Region: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
