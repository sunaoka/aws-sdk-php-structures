<?php

namespace Sunaoka\Aws\Structures\S3\ListObjectVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Owner|null $Owner
 * @property string|null $Key
 * @property string|null $VersionId
 * @property bool|null $IsLatest
 * @property \Aws\Api\DateTimeResult|null $LastModified
 */
class DeleteMarkerEntry extends Shape
{
    /**
     * @param array{
     *     Owner?: Owner|null,
     *     Key?: string|null,
     *     VersionId?: string|null,
     *     IsLatest?: bool|null,
     *     LastModified?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
