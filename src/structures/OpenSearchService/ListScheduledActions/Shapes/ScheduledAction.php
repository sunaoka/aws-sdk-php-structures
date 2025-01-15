<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\ListScheduledActions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property 'SERVICE_SOFTWARE_UPDATE'|'JVM_HEAP_SIZE_TUNING'|'JVM_YOUNG_GEN_TUNING' $Type
 * @property 'HIGH'|'MEDIUM'|'LOW' $Severity
 * @property int $ScheduledTime
 * @property string|null $Description
 * @property 'CUSTOMER'|'SYSTEM'|null $ScheduledBy
 * @property 'PENDING_UPDATE'|'IN_PROGRESS'|'FAILED'|'COMPLETED'|'NOT_ELIGIBLE'|'ELIGIBLE'|null $Status
 * @property bool|null $Mandatory
 * @property bool|null $Cancellable
 */
class ScheduledAction extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     Type: 'SERVICE_SOFTWARE_UPDATE'|'JVM_HEAP_SIZE_TUNING'|'JVM_YOUNG_GEN_TUNING',
     *     Severity: 'HIGH'|'MEDIUM'|'LOW',
     *     ScheduledTime: int,
     *     Description?: string|null,
     *     ScheduledBy?: 'CUSTOMER'|'SYSTEM'|null,
     *     Status?: 'PENDING_UPDATE'|'IN_PROGRESS'|'FAILED'|'COMPLETED'|'NOT_ELIGIBLE'|'ELIGIBLE'|null,
     *     Mandatory?: bool|null,
     *     Cancellable?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
