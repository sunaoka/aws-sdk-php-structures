<?php

namespace Sunaoka\Aws\Structures\Neptune\CreateDBInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StatusType
 * @property bool $Normal
 * @property string $Status
 * @property string $Message
 */
class DBInstanceStatusInfo extends Shape
{
    /**
     * @param array{
     *     StatusType?: string,
     *     Normal?: bool,
     *     Status?: string,
     *     Message?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
