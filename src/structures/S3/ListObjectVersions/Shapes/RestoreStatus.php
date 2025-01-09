<?php

namespace Sunaoka\Aws\Structures\S3\ListObjectVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $IsRestoreInProgress
 * @property \Aws\Api\DateTimeResult $RestoreExpiryDate
 */
class RestoreStatus extends Shape
{
    /**
     * @param array{
     *     IsRestoreInProgress?: bool,
     *     RestoreExpiryDate?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
