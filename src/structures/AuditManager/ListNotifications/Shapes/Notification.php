<?php

namespace Sunaoka\Aws\Structures\AuditManager\ListNotifications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $assessmentId
 * @property string $assessmentName
 * @property string $controlSetId
 * @property string $controlSetName
 * @property string $description
 * @property \Aws\Api\DateTimeResult $eventTime
 * @property string $source
 */
class Notification extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     assessmentId?: string,
     *     assessmentName?: string,
     *     controlSetId?: string,
     *     controlSetName?: string,
     *     description?: string,
     *     eventTime?: \Aws\Api\DateTimeResult,
     *     source?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
