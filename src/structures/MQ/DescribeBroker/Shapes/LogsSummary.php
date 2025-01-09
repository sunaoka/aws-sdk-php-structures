<?php

namespace Sunaoka\Aws\Structures\MQ\DescribeBroker\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Audit
 * @property string $AuditLogGroup
 * @property bool $General
 * @property string $GeneralLogGroup
 * @property PendingLogs $Pending
 */
class LogsSummary extends Shape
{
    /**
     * @param array{
     *     Audit?: bool,
     *     AuditLogGroup?: string,
     *     General: bool,
     *     GeneralLogGroup: string,
     *     Pending?: PendingLogs
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
