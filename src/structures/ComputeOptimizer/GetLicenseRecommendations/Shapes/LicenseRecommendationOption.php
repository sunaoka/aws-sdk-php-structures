<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetLicenseRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $rank
 * @property string $operatingSystem
 * @property 'Enterprise'|'Standard'|'Free'|'NoLicenseEditionFound' $licenseEdition
 * @property 'LicenseIncluded'|'BringYourOwnLicense' $licenseModel
 * @property SavingsOpportunity $savingsOpportunity
 */
class LicenseRecommendationOption extends Shape
{
    /**
     * @param array{
     *     rank?: int,
     *     operatingSystem?: string,
     *     licenseEdition?: 'Enterprise'|'Standard'|'Free'|'NoLicenseEditionFound',
     *     licenseModel?: 'LicenseIncluded'|'BringYourOwnLicense',
     *     savingsOpportunity?: SavingsOpportunity
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
