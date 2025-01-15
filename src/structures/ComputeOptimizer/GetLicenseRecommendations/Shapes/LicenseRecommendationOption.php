<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetLicenseRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $rank
 * @property string|null $operatingSystem
 * @property 'Enterprise'|'Standard'|'Free'|'NoLicenseEditionFound'|null $licenseEdition
 * @property 'LicenseIncluded'|'BringYourOwnLicense'|null $licenseModel
 * @property SavingsOpportunity|null $savingsOpportunity
 */
class LicenseRecommendationOption extends Shape
{
    /**
     * @param array{
     *     rank?: int|null,
     *     operatingSystem?: string|null,
     *     licenseEdition?: 'Enterprise'|'Standard'|'Free'|'NoLicenseEditionFound'|null,
     *     licenseModel?: 'LicenseIncluded'|'BringYourOwnLicense'|null,
     *     savingsOpportunity?: SavingsOpportunity|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
