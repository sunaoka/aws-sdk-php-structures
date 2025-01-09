<?php

namespace Sunaoka\Aws\Structures\Iot\DeleteScheduledAudit;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $scheduledAuditName
 */
class DeleteScheduledAuditRequest extends Request
{
    /**
     * @param array{scheduledAuditName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
