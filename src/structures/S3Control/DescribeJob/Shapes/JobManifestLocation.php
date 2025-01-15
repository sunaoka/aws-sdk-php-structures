<?php

namespace Sunaoka\Aws\Structures\S3Control\DescribeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ObjectArn
 * @property string|null $ObjectVersionId
 * @property string $ETag
 */
class JobManifestLocation extends Shape
{
    /**
     * @param array{
     *     ObjectArn: string,
     *     ObjectVersionId?: string|null,
     *     ETag: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
