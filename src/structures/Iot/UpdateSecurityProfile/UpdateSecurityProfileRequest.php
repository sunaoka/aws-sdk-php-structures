<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateSecurityProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $securityProfileName
 * @property string|null $securityProfileDescription
 * @property list<Shapes\Behavior>|null $behaviors
 * @property array<'SNS', Shapes\AlertTarget>|null $alertTargets
 * @property list<string>|null $additionalMetricsToRetain
 * @property list<Shapes\MetricToRetain>|null $additionalMetricsToRetainV2
 * @property bool|null $deleteBehaviors
 * @property bool|null $deleteAlertTargets
 * @property bool|null $deleteAdditionalMetricsToRetain
 * @property int|null $expectedVersion
 * @property Shapes\MetricsExportConfig|null $metricsExportConfig
 * @property bool|null $deleteMetricsExportConfig
 */
class UpdateSecurityProfileRequest extends Request
{
    /**
     * @param array{
     *     securityProfileName: string,
     *     securityProfileDescription?: string|null,
     *     behaviors?: list<Shapes\Behavior>|null,
     *     alertTargets?: array<'SNS', Shapes\AlertTarget>|null,
     *     additionalMetricsToRetain?: list<string>|null,
     *     additionalMetricsToRetainV2?: list<Shapes\MetricToRetain>|null,
     *     deleteBehaviors?: bool|null,
     *     deleteAlertTargets?: bool|null,
     *     deleteAdditionalMetricsToRetain?: bool|null,
     *     expectedVersion?: int|null,
     *     metricsExportConfig?: Shapes\MetricsExportConfig|null,
     *     deleteMetricsExportConfig?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
