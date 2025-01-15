<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeAccountAuditConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $roleArn
 * @property array<'SNS', Shapes\AuditNotificationTarget>|null $auditNotificationTargetConfigurations
 * @property array<string, Shapes\AuditCheckConfiguration>|null $auditCheckConfigurations
 */
class DescribeAccountAuditConfigurationResponse extends Response
{
}
