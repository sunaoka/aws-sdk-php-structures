<?php

namespace Sunaoka\Aws\Structures\MQ\DescribeBroker\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Audit
 * @property string|null $AuditLogGroup
 * @property bool $General
 * @property string $GeneralLogGroup
 * @property PendingLogs|null $Pending
 */
class LogsSummary extends Shape
{
    /**
     * @param array{
     *     Audit?: bool|null,
     *     AuditLogGroup?: string|null,
     *     General: bool,
     *     GeneralLogGroup: string,
     *     Pending?: PendingLogs|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
