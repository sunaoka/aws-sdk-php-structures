<?php

namespace Sunaoka\Aws\Structures\AuditManager\UpdateAssessmentFrameworkShare;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $requestId
 * @property 'SENT'|'RECEIVED' $requestType
 * @property 'ACCEPT'|'DECLINE'|'REVOKE' $action
 */
class UpdateAssessmentFrameworkShareRequest extends Request
{
    /**
     * @param array{
     *     requestId: string,
     *     requestType: 'SENT'|'RECEIVED',
     *     action: 'ACCEPT'|'DECLINE'|'REVOKE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
