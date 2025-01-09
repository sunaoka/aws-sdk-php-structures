<?php

namespace Sunaoka\Aws\Structures\Ssm\ListOpsItemEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OpsItemId
 * @property string $EventId
 * @property string $Source
 * @property string $DetailType
 * @property string $Detail
 * @property OpsItemIdentity $CreatedBy
 * @property \Aws\Api\DateTimeResult $CreatedTime
 */
class OpsItemEventSummary extends Shape
{
    /**
     * @param array{
     *     OpsItemId?: string,
     *     EventId?: string,
     *     Source?: string,
     *     DetailType?: string,
     *     Detail?: string,
     *     CreatedBy?: OpsItemIdentity,
     *     CreatedTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
