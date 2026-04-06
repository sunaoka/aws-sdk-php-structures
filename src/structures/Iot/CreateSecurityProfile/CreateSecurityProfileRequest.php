<?php

namespace Sunaoka\Aws\Structures\Iot\CreateSecurityProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $securityProfileName
 * @property string|null $securityProfileDescription
 * @property list<Shapes\Behavior>|null $behaviors
 * @property array<'SNS', Shapes\AlertTarget>|null $alertTargets
 * @property list<string>|null $additionalMetricsToRetain
 * @property list<Shapes\MetricToRetain>|null $additionalMetricsToRetainV2
 * @property list<Shapes\Tag>|null $tags
 * @property Shapes\MetricsExportConfig|null $metricsExportConfig
 */
class CreateSecurityProfileRequest extends Request
{
    /**
     * @param array{
     *     securityProfileName: string,
     *     securityProfileDescription?: string|null,
     *     behaviors?: list<Shapes\Behavior>|null,
     *     alertTargets?: array<'SNS', Shapes\AlertTarget>|null,
     *     additionalMetricsToRetain?: list<string>|null,
     *     additionalMetricsToRetainV2?: list<Shapes\MetricToRetain>|null,
     *     tags?: list<Shapes\Tag>|null,
     *     metricsExportConfig?: Shapes\MetricsExportConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
