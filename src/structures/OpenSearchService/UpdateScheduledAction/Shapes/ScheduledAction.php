<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\UpdateScheduledAction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property 'SERVICE_SOFTWARE_UPDATE'|'JVM_HEAP_SIZE_TUNING'|'JVM_YOUNG_GEN_TUNING' $Type
 * @property 'HIGH'|'MEDIUM'|'LOW' $Severity
 * @property int $ScheduledTime
 * @property string $Description
 * @property 'CUSTOMER'|'SYSTEM' $ScheduledBy
 * @property 'PENDING_UPDATE'|'IN_PROGRESS'|'FAILED'|'COMPLETED'|'NOT_ELIGIBLE'|'ELIGIBLE' $Status
 * @property bool $Mandatory
 * @property bool $Cancellable
 */
class ScheduledAction extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     Type: 'SERVICE_SOFTWARE_UPDATE'|'JVM_HEAP_SIZE_TUNING'|'JVM_YOUNG_GEN_TUNING',
     *     Severity: 'HIGH'|'MEDIUM'|'LOW',
     *     ScheduledTime: int,
     *     Description?: string,
     *     ScheduledBy?: 'CUSTOMER'|'SYSTEM',
     *     Status?: 'PENDING_UPDATE'|'IN_PROGRESS'|'FAILED'|'COMPLETED'|'NOT_ELIGIBLE'|'ELIGIBLE',
     *     Mandatory?: bool,
     *     Cancellable?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
