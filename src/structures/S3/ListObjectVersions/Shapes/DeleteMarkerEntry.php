<?php

namespace Sunaoka\Aws\Structures\S3\ListObjectVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Owner $Owner
 * @property string $Key
 * @property string $VersionId
 * @property bool $IsLatest
 * @property \Aws\Api\DateTimeResult $LastModified
 */
class DeleteMarkerEntry extends Shape
{
    /**
     * @param array{
     *     Owner?: Owner,
     *     Key?: string,
     *     VersionId?: string,
     *     IsLatest?: bool,
     *     LastModified?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
