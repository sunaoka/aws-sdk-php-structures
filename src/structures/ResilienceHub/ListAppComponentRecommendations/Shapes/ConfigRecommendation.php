<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ListAppComponentRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $appComponentName
 * @property array<'Software'|'Hardware'|'AZ'|'Region', DisruptionCompliance>|null $compliance
 * @property Cost|null $cost
 * @property string|null $description
 * @property 'MultiSite'|'WarmStandby'|'PilotLight'|'BackupAndRestore'|'NoRecoveryPlan'|null $haArchitecture
 * @property string $name
 * @property 'LeastCost'|'LeastChange'|'BestAZRecovery'|'LeastErrors'|'BestAttainable'|'BestRegionRecovery' $optimizationType
 * @property array<'Software'|'Hardware'|'AZ'|'Region', RecommendationDisruptionCompliance>|null $recommendationCompliance
 * @property string $referenceId
 * @property list<string>|null $suggestedChanges
 */
class ConfigRecommendation extends Shape
{
    /**
     * @param array{
     *     appComponentName?: string|null,
     *     compliance?: array<'Software'|'Hardware'|'AZ'|'Region', DisruptionCompliance>|null,
     *     cost?: Cost|null,
     *     description?: string|null,
     *     haArchitecture?: 'MultiSite'|'WarmStandby'|'PilotLight'|'BackupAndRestore'|'NoRecoveryPlan'|null,
     *     name: string,
     *     optimizationType: 'LeastCost'|'LeastChange'|'BestAZRecovery'|'LeastErrors'|'BestAttainable'|'BestRegionRecovery',
     *     recommendationCompliance?: array<'Software'|'Hardware'|'AZ'|'Region', RecommendationDisruptionCompliance>|null,
     *     referenceId: string,
     *     suggestedChanges?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
