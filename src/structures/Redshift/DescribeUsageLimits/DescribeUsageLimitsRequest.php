<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeUsageLimits;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $UsageLimitId
 * @property string|null $ClusterIdentifier
 * @property 'spectrum'|'concurrency-scaling'|'cross-region-datasharing'|'extra-compute-for-automatic-optimization'|null $FeatureType
 * @property int|null $MaxRecords
 * @property string|null $Marker
 * @property list<string>|null $TagKeys
 * @property list<string>|null $TagValues
 */
class DescribeUsageLimitsRequest extends Request
{
    /**
     * @param array{
     *     UsageLimitId?: string|null,
     *     ClusterIdentifier?: string|null,
     *     FeatureType?: 'spectrum'|'concurrency-scaling'|'cross-region-datasharing'|'extra-compute-for-automatic-optimization'|null,
     *     MaxRecords?: int|null,
     *     Marker?: string|null,
     *     TagKeys?: list<string>|null,
     *     TagValues?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
