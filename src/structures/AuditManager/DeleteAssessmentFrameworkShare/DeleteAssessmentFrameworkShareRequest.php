<?php

namespace Sunaoka\Aws\Structures\AuditManager\DeleteAssessmentFrameworkShare;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $requestId
 * @property 'SENT'|'RECEIVED' $requestType
 */
class DeleteAssessmentFrameworkShareRequest extends Request
{
    /**
     * @param array{
     *     requestId: string,
     *     requestType: 'SENT'|'RECEIVED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
