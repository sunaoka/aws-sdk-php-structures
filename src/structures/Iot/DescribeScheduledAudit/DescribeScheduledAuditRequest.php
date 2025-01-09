<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeScheduledAudit;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $scheduledAuditName
 */
class DescribeScheduledAuditRequest extends Request
{
    /**
     * @param array{scheduledAuditName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
