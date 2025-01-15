<?php

namespace Sunaoka\Aws\Structures\AuditManager\ListNotifications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $assessmentId
 * @property string|null $assessmentName
 * @property string|null $controlSetId
 * @property string|null $controlSetName
 * @property string|null $description
 * @property \Aws\Api\DateTimeResult|null $eventTime
 * @property string|null $source
 */
class Notification extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     assessmentId?: string|null,
     *     assessmentName?: string|null,
     *     controlSetId?: string|null,
     *     controlSetName?: string|null,
     *     description?: string|null,
     *     eventTime?: \Aws\Api\DateTimeResult|null,
     *     source?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
