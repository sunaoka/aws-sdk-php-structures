<?php

namespace Sunaoka\Aws\Structures\S3\ListObjects\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $IsRestoreInProgress
 * @property \Aws\Api\DateTimeResult|null $RestoreExpiryDate
 */
class RestoreStatus extends Shape
{
    /**
     * @param array{
     *     IsRestoreInProgress?: bool|null,
     *     RestoreExpiryDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
