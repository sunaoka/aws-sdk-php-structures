<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeSecurityProfile;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $securityProfileName
 * @property string|null $securityProfileArn
 * @property string|null $securityProfileDescription
 * @property list<Shapes\Behavior>|null $behaviors
 * @property array<'SNS', Shapes\AlertTarget>|null $alertTargets
 * @property list<string>|null $additionalMetricsToRetain
 * @property list<Shapes\MetricToRetain>|null $additionalMetricsToRetainV2
 * @property int|null $version
 * @property \Aws\Api\DateTimeResult|null $creationDate
 * @property \Aws\Api\DateTimeResult|null $lastModifiedDate
 * @property Shapes\MetricsExportConfig|null $metricsExportConfig
 */
class DescribeSecurityProfileResponse extends Response
{
}
