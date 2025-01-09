<?php

namespace Sunaoka\Aws\Structures\Iot\DeleteAccountAuditConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $deleteScheduledAudits
 */
class DeleteAccountAuditConfigurationRequest extends Request
{
    /**
     * @param array{deleteScheduledAudits?: bool} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
