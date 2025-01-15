<?php

namespace Sunaoka\Aws\Structures\Transfer\DescribeExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Bucket
 * @property string|null $Key
 * @property string|null $VersionId
 * @property string|null $Etag
 */
class S3FileLocation extends Shape
{
    /**
     * @param array{
     *     Bucket?: string|null,
     *     Key?: string|null,
     *     VersionId?: string|null,
     *     Etag?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
