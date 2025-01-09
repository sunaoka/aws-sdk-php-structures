<?php

namespace Sunaoka\Aws\Structures\AuditManager\GetSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $eventDataStoreArn
 * @property 'ENABLED'|'DISABLED'|'ENABLE_IN_PROGRESS'|'DISABLE_IN_PROGRESS' $enablementStatus
 * @property 'NOT_STARTED'|'IN_PROGRESS'|'COMPLETED' $backfillStatus
 * @property string $error
 */
class EvidenceFinderEnablement extends Shape
{
    /**
     * @param array{
     *     eventDataStoreArn?: string,
     *     enablementStatus?: 'ENABLED'|'DISABLED'|'ENABLE_IN_PROGRESS'|'DISABLE_IN_PROGRESS',
     *     backfillStatus?: 'NOT_STARTED'|'IN_PROGRESS'|'COMPLETED',
     *     error?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
