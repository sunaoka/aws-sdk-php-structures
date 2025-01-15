<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateAccountAuditConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $roleArn
 * @property array<'SNS', Shapes\AuditNotificationTarget>|null $auditNotificationTargetConfigurations
 * @property array<string, Shapes\AuditCheckConfiguration>|null $auditCheckConfigurations
 */
class UpdateAccountAuditConfigurationRequest extends Request
{
    /**
     * @param array{
     *     roleArn?: string|null,
     *     auditNotificationTargetConfigurations?: array<'SNS', Shapes\AuditNotificationTarget>|null,
     *     auditCheckConfigurations?: array<string, Shapes\AuditCheckConfiguration>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
