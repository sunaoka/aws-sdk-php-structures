<?php

namespace Sunaoka\Aws\Structures\FSx\CreateFileSystem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DISABLED'|'SUCCESS_ONLY'|'FAILURE_ONLY'|'SUCCESS_AND_FAILURE' $FileAccessAuditLogLevel
 * @property 'DISABLED'|'SUCCESS_ONLY'|'FAILURE_ONLY'|'SUCCESS_AND_FAILURE' $FileShareAccessAuditLogLevel
 * @property string $AuditLogDestination
 */
class WindowsAuditLogCreateConfiguration extends Shape
{
    /**
     * @param array{
     *     FileAccessAuditLogLevel: 'DISABLED'|'SUCCESS_ONLY'|'FAILURE_ONLY'|'SUCCESS_AND_FAILURE',
     *     FileShareAccessAuditLogLevel: 'DISABLED'|'SUCCESS_ONLY'|'FAILURE_ONLY'|'SUCCESS_AND_FAILURE',
     *     AuditLogDestination?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
