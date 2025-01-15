<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\GetCollaborationMLInputChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $statusCode
 * @property string|null $message
 */
class StatusDetails extends Shape
{
    /**
     * @param array{
     *     statusCode?: string|null,
     *     message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
