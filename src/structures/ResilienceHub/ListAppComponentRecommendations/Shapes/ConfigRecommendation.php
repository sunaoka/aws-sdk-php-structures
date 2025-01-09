<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ListAppComponentRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $appComponentName
 * @property array<'Software'|'Hardware'|'AZ'|'Region', DisruptionCompliance> $compliance
 * @property Cost $cost
 * @property string $description
 * @property 'MultiSite'|'WarmStandby'|'PilotLight'|'BackupAndRestore'|'NoRecoveryPlan' $haArchitecture
 * @property string $name
 * @property 'LeastCost'|'LeastChange'|'BestAZRecovery'|'LeastErrors'|'BestAttainable'|'BestRegionRecovery' $optimizationType
 * @property array<'Software'|'Hardware'|'AZ'|'Region', RecommendationDisruptionCompliance> $recommendationCompliance
 * @property string $referenceId
 * @property list<string> $suggestedChanges
 */
class ConfigRecommendation extends Shape
{
    /**
     * @param array{
     *     appComponentName?: string,
     *     compliance?: array<'Software'|'Hardware'|'AZ'|'Region', DisruptionCompliance>,
     *     cost?: Cost,
     *     description?: string,
     *     haArchitecture?: 'MultiSite'|'WarmStandby'|'PilotLight'|'BackupAndRestore'|'NoRecoveryPlan',
     *     name: string,
     *     optimizationType: 'LeastCost'|'LeastChange'|'BestAZRecovery'|'LeastErrors'|'BestAttainable'|'BestRegionRecovery',
     *     recommendationCompliance?: array<'Software'|'Hardware'|'AZ'|'Region', RecommendationDisruptionCompliance>,
     *     referenceId: string,
     *     suggestedChanges?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
