<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetRDSDatabaseRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $resourceArn
 * @property string $accountId
 * @property string $engine
 * @property string $engineVersion
 * @property int $promotionTier
 * @property string $currentDBInstanceClass
 * @property DBStorageConfiguration $currentStorageConfiguration
 * @property string $dbClusterIdentifier
 * @property 'True'|'False' $idle
 * @property 'Optimized'|'Underprovisioned'|'Overprovisioned' $instanceFinding
 * @property 'Optimized'|'Underprovisioned'|'Overprovisioned' $storageFinding
 * @property list<'CPUOverprovisioned'|'NetworkBandwidthOverprovisioned'|'EBSIOPSOverprovisioned'|'EBSIOPSUnderprovisioned'|'EBSThroughputOverprovisioned'|'CPUUnderprovisioned'|'NetworkBandwidthUnderprovisioned'|'EBSThroughputUnderprovisioned'|'NewGenerationDBInstanceClassAvailable'|'NewEngineVersionAvailable'|'DBClusterWriterUnderprovisioned'|'MemoryUnderprovisioned'|'InstanceStorageReadIOPSUnderprovisioned'|'InstanceStorageWriteIOPSUnderprovisioned'> $instanceFindingReasonCodes
 * @property 'VeryLow'|'Low'|'Medium'|'High' $currentInstancePerformanceRisk
 * @property list<'EBSVolumeAllocatedStorageUnderprovisioned'|'EBSVolumeThroughputUnderprovisioned'|'EBSVolumeIOPSOverprovisioned'|'EBSVolumeThroughputOverprovisioned'|'NewGenerationStorageTypeAvailable'> $storageFindingReasonCodes
 * @property list<RDSDBInstanceRecommendationOption> $instanceRecommendationOptions
 * @property list<RDSDBStorageRecommendationOption> $storageRecommendationOptions
 * @property list<RDSDBUtilizationMetric> $utilizationMetrics
 * @property RDSEffectiveRecommendationPreferences $effectiveRecommendationPreferences
 * @property double $lookbackPeriodInDays
 * @property \Aws\Api\DateTimeResult $lastRefreshTimestamp
 * @property list<Tag> $tags
 */
class RDSDBRecommendation extends Shape
{
    /**
     * @param array{
     *     resourceArn?: string,
     *     accountId?: string,
     *     engine?: string,
     *     engineVersion?: string,
     *     promotionTier?: int,
     *     currentDBInstanceClass?: string,
     *     currentStorageConfiguration?: DBStorageConfiguration,
     *     dbClusterIdentifier?: string,
     *     idle?: 'True'|'False',
     *     instanceFinding?: 'Optimized'|'Underprovisioned'|'Overprovisioned',
     *     storageFinding?: 'Optimized'|'Underprovisioned'|'Overprovisioned',
     *     instanceFindingReasonCodes?: list<'CPUOverprovisioned'|'NetworkBandwidthOverprovisioned'|'EBSIOPSOverprovisioned'|'EBSIOPSUnderprovisioned'|'EBSThroughputOverprovisioned'|'CPUUnderprovisioned'|'NetworkBandwidthUnderprovisioned'|'EBSThroughputUnderprovisioned'|'NewGenerationDBInstanceClassAvailable'|'NewEngineVersionAvailable'|'DBClusterWriterUnderprovisioned'|'MemoryUnderprovisioned'|'InstanceStorageReadIOPSUnderprovisioned'|'InstanceStorageWriteIOPSUnderprovisioned'>,
     *     currentInstancePerformanceRisk?: 'VeryLow'|'Low'|'Medium'|'High',
     *     storageFindingReasonCodes?: list<'EBSVolumeAllocatedStorageUnderprovisioned'|'EBSVolumeThroughputUnderprovisioned'|'EBSVolumeIOPSOverprovisioned'|'EBSVolumeThroughputOverprovisioned'|'NewGenerationStorageTypeAvailable'>,
     *     instanceRecommendationOptions?: list<RDSDBInstanceRecommendationOption>,
     *     storageRecommendationOptions?: list<RDSDBStorageRecommendationOption>,
     *     utilizationMetrics?: list<RDSDBUtilizationMetric>,
     *     effectiveRecommendationPreferences?: RDSEffectiveRecommendationPreferences,
     *     lookbackPeriodInDays?: double,
     *     lastRefreshTimestamp?: \Aws\Api\DateTimeResult,
     *     tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
