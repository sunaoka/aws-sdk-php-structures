<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\ListAudienceExportJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $statusCode
 * @property string $message
 */
class StatusDetails extends Shape
{
    /**
     * @param array{
     *     statusCode?: string,
     *     message?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
