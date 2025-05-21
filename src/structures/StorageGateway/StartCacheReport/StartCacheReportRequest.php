<?php

namespace Sunaoka\Aws\Structures\StorageGateway\StartCacheReport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FileShareARN
 * @property string $Role
 * @property string $LocationARN
 * @property string $BucketRegion
 * @property string|null $VPCEndpointDNSName
 * @property list<Shapes\CacheReportFilter>|null $InclusionFilters
 * @property list<Shapes\CacheReportFilter>|null $ExclusionFilters
 * @property string $ClientToken
 * @property list<Shapes\Tag>|null $Tags
 */
class StartCacheReportRequest extends Request
{
    /**
     * @param array{
     *     FileShareARN: string,
     *     Role: string,
     *     LocationARN: string,
     *     BucketRegion: string,
     *     VPCEndpointDNSName?: string|null,
     *     InclusionFilters?: list<Shapes\CacheReportFilter>|null,
     *     ExclusionFilters?: list<Shapes\CacheReportFilter>|null,
     *     ClientToken: string,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
