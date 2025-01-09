<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateSecurityProfile;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $securityProfileName
 * @property string $securityProfileArn
 * @property string $securityProfileDescription
 * @property list<Shapes\Behavior> $behaviors
 * @property array<'SNS', Shapes\AlertTarget> $alertTargets
 * @property list<string> $additionalMetricsToRetain
 * @property list<Shapes\MetricToRetain> $additionalMetricsToRetainV2
 * @property int $version
 * @property \Aws\Api\DateTimeResult $creationDate
 * @property \Aws\Api\DateTimeResult $lastModifiedDate
 * @property Shapes\MetricsExportConfig $metricsExportConfig
 */
class UpdateSecurityProfileResponse extends Response
{
}
