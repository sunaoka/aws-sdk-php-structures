<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateAccountAuditConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $roleArn
 * @property array<'SNS', Shapes\AuditNotificationTarget> $auditNotificationTargetConfigurations
 * @property array<string, Shapes\AuditCheckConfiguration> $auditCheckConfigurations
 */
class UpdateAccountAuditConfigurationRequest extends Request
{
    /**
     * @param array{
     *     roleArn?: string,
     *     auditNotificationTargetConfigurations?: array<'SNS', Shapes\AuditNotificationTarget>,
     *     auditCheckConfigurations?: array<string, Shapes\AuditCheckConfiguration>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
