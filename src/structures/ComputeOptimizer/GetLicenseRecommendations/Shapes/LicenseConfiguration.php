<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetLicenseRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $numberOfCores
 * @property string|null $instanceType
 * @property string|null $operatingSystem
 * @property 'Enterprise'|'Standard'|'Free'|'NoLicenseEditionFound'|null $licenseEdition
 * @property 'SQLServer'|null $licenseName
 * @property 'LicenseIncluded'|'BringYourOwnLicense'|null $licenseModel
 * @property string|null $licenseVersion
 * @property list<MetricSource>|null $metricsSource
 */
class LicenseConfiguration extends Shape
{
    /**
     * @param array{
     *     numberOfCores?: int|null,
     *     instanceType?: string|null,
     *     operatingSystem?: string|null,
     *     licenseEdition?: 'Enterprise'|'Standard'|'Free'|'NoLicenseEditionFound'|null,
     *     licenseName?: 'SQLServer'|null,
     *     licenseModel?: 'LicenseIncluded'|'BringYourOwnLicense'|null,
     *     licenseVersion?: string|null,
     *     metricsSource?: list<MetricSource>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
