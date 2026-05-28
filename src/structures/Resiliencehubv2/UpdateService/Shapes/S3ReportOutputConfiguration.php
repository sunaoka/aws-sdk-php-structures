<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\UpdateService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bucketPath
 * @property string $bucketOwner
 */
class S3ReportOutputConfiguration extends Shape
{
    /**
     * @param array{
     *     bucketPath: string,
     *     bucketOwner: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
