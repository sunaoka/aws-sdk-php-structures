<?php

namespace Sunaoka\Aws\Structures\Iot\CreateSecurityProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $securityProfileName
 * @property string $securityProfileDescription
 * @property list<Shapes\Behavior> $behaviors
 * @property array<'SNS', Shapes\AlertTarget> $alertTargets
 * @property list<string> $additionalMetricsToRetain
 * @property list<Shapes\MetricToRetain> $additionalMetricsToRetainV2
 * @property list<Shapes\Tag> $tags
 * @property Shapes\MetricsExportConfig $metricsExportConfig
 */
class CreateSecurityProfileRequest extends Request
{
    /**
     * @param array{
     *     securityProfileName: string,
     *     securityProfileDescription?: string,
     *     behaviors?: list<Shapes\Behavior>,
     *     alertTargets?: array<'SNS', Shapes\AlertTarget>,
     *     additionalMetricsToRetain?: list<string>,
     *     additionalMetricsToRetainV2?: list<Shapes\MetricToRetain>,
     *     tags?: list<Shapes\Tag>,
     *     metricsExportConfig?: Shapes\MetricsExportConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
