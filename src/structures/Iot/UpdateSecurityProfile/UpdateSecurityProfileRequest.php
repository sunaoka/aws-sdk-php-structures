<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateSecurityProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $securityProfileName
 * @property string $securityProfileDescription
 * @property list<Shapes\Behavior> $behaviors
 * @property array<'SNS', Shapes\AlertTarget> $alertTargets
 * @property list<string> $additionalMetricsToRetain
 * @property list<Shapes\MetricToRetain> $additionalMetricsToRetainV2
 * @property bool $deleteBehaviors
 * @property bool $deleteAlertTargets
 * @property bool $deleteAdditionalMetricsToRetain
 * @property int $expectedVersion
 * @property Shapes\MetricsExportConfig $metricsExportConfig
 * @property bool $deleteMetricsExportConfig
 */
class UpdateSecurityProfileRequest extends Request
{
    /**
     * @param array{
     *     securityProfileName: string,
     *     securityProfileDescription?: string,
     *     behaviors?: list<Shapes\Behavior>,
     *     alertTargets?: array<'SNS', Shapes\AlertTarget>,
     *     additionalMetricsToRetain?: list<string>,
     *     additionalMetricsToRetainV2?: list<Shapes\MetricToRetain>,
     *     deleteBehaviors?: bool,
     *     deleteAlertTargets?: bool,
     *     deleteAdditionalMetricsToRetain?: bool,
     *     expectedVersion?: int,
     *     metricsExportConfig?: Shapes\MetricsExportConfig,
     *     deleteMetricsExportConfig?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
