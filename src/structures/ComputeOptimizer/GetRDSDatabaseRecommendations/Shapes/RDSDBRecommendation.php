<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetRDSDatabaseRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $resourceArn
 * @property string|null $accountId
 * @property string|null $engine
 * @property string|null $engineVersion
 * @property string|null $currentDBInstanceClass
 * @property DBStorageConfiguration|null $currentStorageConfiguration
 * @property 'True'|'False'|null $idle
 * @property 'Optimized'|'Underprovisioned'|'Overprovisioned'|null $instanceFinding
 * @property 'Optimized'|'Underprovisioned'|'Overprovisioned'|null $storageFinding
 * @property list<'CPUOverprovisioned'|'NetworkBandwidthOverprovisioned'|'EBSIOPSOverprovisioned'|'EBSThroughputOverprovisioned'|'CPUUnderprovisioned'|'NetworkBandwidthUnderprovisioned'|'EBSThroughputUnderprovisioned'|'NewGenerationDBInstanceClassAvailable'|'NewEngineVersionAvailable'>|null $instanceFindingReasonCodes
 * @property list<'EBSVolumeAllocatedStorageUnderprovisioned'|'EBSVolumeThroughputUnderprovisioned'|'EBSVolumeIOPSOverprovisioned'|'EBSVolumeThroughputOverprovisioned'|'NewGenerationStorageTypeAvailable'>|null $storageFindingReasonCodes
 * @property list<RDSDBInstanceRecommendationOption>|null $instanceRecommendationOptions
 * @property list<RDSDBStorageRecommendationOption>|null $storageRecommendationOptions
 * @property list<RDSDBUtilizationMetric>|null $utilizationMetrics
 * @property RDSEffectiveRecommendationPreferences|null $effectiveRecommendationPreferences
 * @property double|null $lookbackPeriodInDays
 * @property \Aws\Api\DateTimeResult|null $lastRefreshTimestamp
 * @property list<Tag>|null $tags
 */
class RDSDBRecommendation extends Shape
{
    /**
     * @param array{
     *     resourceArn?: string|null,
     *     accountId?: string|null,
     *     engine?: string|null,
     *     engineVersion?: string|null,
     *     currentDBInstanceClass?: string|null,
     *     currentStorageConfiguration?: DBStorageConfiguration|null,
     *     idle?: 'True'|'False'|null,
     *     instanceFinding?: 'Optimized'|'Underprovisioned'|'Overprovisioned'|null,
     *     storageFinding?: 'Optimized'|'Underprovisioned'|'Overprovisioned'|null,
     *     instanceFindingReasonCodes?: list<'CPUOverprovisioned'|'NetworkBandwidthOverprovisioned'|'EBSIOPSOverprovisioned'|'EBSThroughputOverprovisioned'|'CPUUnderprovisioned'|'NetworkBandwidthUnderprovisioned'|'EBSThroughputUnderprovisioned'|'NewGenerationDBInstanceClassAvailable'|'NewEngineVersionAvailable'>|null,
     *     storageFindingReasonCodes?: list<'EBSVolumeAllocatedStorageUnderprovisioned'|'EBSVolumeThroughputUnderprovisioned'|'EBSVolumeIOPSOverprovisioned'|'EBSVolumeThroughputOverprovisioned'|'NewGenerationStorageTypeAvailable'>|null,
     *     instanceRecommendationOptions?: list<RDSDBInstanceRecommendationOption>|null,
     *     storageRecommendationOptions?: list<RDSDBStorageRecommendationOption>|null,
     *     utilizationMetrics?: list<RDSDBUtilizationMetric>|null,
     *     effectiveRecommendationPreferences?: RDSEffectiveRecommendationPreferences|null,
     *     lookbackPeriodInDays?: double|null,
     *     lastRefreshTimestamp?: \Aws\Api\DateTimeResult|null,
     *     tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
