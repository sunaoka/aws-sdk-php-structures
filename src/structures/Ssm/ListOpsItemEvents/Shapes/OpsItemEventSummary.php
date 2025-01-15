<?php

namespace Sunaoka\Aws\Structures\Ssm\ListOpsItemEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $OpsItemId
 * @property string|null $EventId
 * @property string|null $Source
 * @property string|null $DetailType
 * @property string|null $Detail
 * @property OpsItemIdentity|null $CreatedBy
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 */
class OpsItemEventSummary extends Shape
{
    /**
     * @param array{
     *     OpsItemId?: string|null,
     *     EventId?: string|null,
     *     Source?: string|null,
     *     DetailType?: string|null,
     *     Detail?: string|null,
     *     CreatedBy?: OpsItemIdentity|null,
     *     CreatedTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
