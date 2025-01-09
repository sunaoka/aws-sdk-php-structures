<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetLicenseRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $numberOfCores
 * @property string $instanceType
 * @property string $operatingSystem
 * @property 'Enterprise'|'Standard'|'Free'|'NoLicenseEditionFound' $licenseEdition
 * @property 'SQLServer' $licenseName
 * @property 'LicenseIncluded'|'BringYourOwnLicense' $licenseModel
 * @property string $licenseVersion
 * @property list<MetricSource> $metricsSource
 */
class LicenseConfiguration extends Shape
{
    /**
     * @param array{
     *     numberOfCores?: int,
     *     instanceType?: string,
     *     operatingSystem?: string,
     *     licenseEdition?: 'Enterprise'|'Standard'|'Free'|'NoLicenseEditionFound',
     *     licenseName?: 'SQLServer',
     *     licenseModel?: 'LicenseIncluded'|'BringYourOwnLicense',
     *     licenseVersion?: string,
     *     metricsSource?: list<MetricSource>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
