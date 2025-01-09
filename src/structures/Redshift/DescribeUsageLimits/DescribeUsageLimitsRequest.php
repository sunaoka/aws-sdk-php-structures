<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeUsageLimits;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UsageLimitId
 * @property string $ClusterIdentifier
 * @property 'spectrum'|'concurrency-scaling'|'cross-region-datasharing' $FeatureType
 * @property int $MaxRecords
 * @property string $Marker
 * @property list<string> $TagKeys
 * @property list<string> $TagValues
 */
class DescribeUsageLimitsRequest extends Request
{
    /**
     * @param array{
     *     UsageLimitId?: string,
     *     ClusterIdentifier?: string,
     *     FeatureType?: 'spectrum'|'concurrency-scaling'|'cross-region-datasharing',
     *     MaxRecords?: int,
     *     Marker?: string,
     *     TagKeys?: list<string>,
     *     TagValues?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
