<?php

namespace Sunaoka\Aws\Structures\Transfer\ListExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Bucket
 * @property string $Key
 * @property string $VersionId
 * @property string $Etag
 */
class S3FileLocation extends Shape
{
    /**
     * @param array{
     *     Bucket?: string,
     *     Key?: string,
     *     VersionId?: string,
     *     Etag?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
