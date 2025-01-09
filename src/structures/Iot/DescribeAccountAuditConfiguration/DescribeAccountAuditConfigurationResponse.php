<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeAccountAuditConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $roleArn
 * @property array<'SNS', Shapes\AuditNotificationTarget> $auditNotificationTargetConfigurations
 * @property array<string, Shapes\AuditCheckConfiguration> $auditCheckConfigurations
 */
class DescribeAccountAuditConfigurationResponse extends Response
{
}
