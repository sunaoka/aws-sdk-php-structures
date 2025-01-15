<?php

namespace Sunaoka\Aws\Structures\DocDB\DeleteDBInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $StatusType
 * @property bool|null $Normal
 * @property string|null $Status
 * @property string|null $Message
 */
class DBInstanceStatusInfo extends Shape
{
    /**
     * @param array{
     *     StatusType?: string|null,
     *     Normal?: bool|null,
     *     Status?: string|null,
     *     Message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
