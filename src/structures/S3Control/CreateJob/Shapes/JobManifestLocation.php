<?php

namespace Sunaoka\Aws\Structures\S3Control\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ObjectArn
 * @property string $ObjectVersionId
 * @property string $ETag
 */
class JobManifestLocation extends Shape
{
    /**
     * @param array{
     *     ObjectArn: string,
     *     ObjectVersionId?: string,
     *     ETag: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
