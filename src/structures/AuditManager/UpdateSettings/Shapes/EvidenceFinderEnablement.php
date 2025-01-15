<?php

namespace Sunaoka\Aws\Structures\AuditManager\UpdateSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $eventDataStoreArn
 * @property 'ENABLED'|'DISABLED'|'ENABLE_IN_PROGRESS'|'DISABLE_IN_PROGRESS'|null $enablementStatus
 * @property 'NOT_STARTED'|'IN_PROGRESS'|'COMPLETED'|null $backfillStatus
 * @property string|null $error
 */
class EvidenceFinderEnablement extends Shape
{
    /**
     * @param array{
     *     eventDataStoreArn?: string|null,
     *     enablementStatus?: 'ENABLED'|'DISABLED'|'ENABLE_IN_PROGRESS'|'DISABLE_IN_PROGRESS'|null,
     *     backfillStatus?: 'NOT_STARTED'|'IN_PROGRESS'|'COMPLETED'|null,
     *     error?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
