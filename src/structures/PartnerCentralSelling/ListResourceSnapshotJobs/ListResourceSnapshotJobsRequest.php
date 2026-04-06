<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListResourceSnapshotJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property int<1, 1000>|null $MaxResults
 * @property string|null $NextToken
 * @property string|null $EngagementIdentifier
 * @property 'Running'|'Stopped'|null $Status
 * @property Shapes\SortObject|null $Sort
 */
class ListResourceSnapshotJobsRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     MaxResults?: int<1, 1000>|null,
     *     NextToken?: string|null,
     *     EngagementIdentifier?: string|null,
     *     Status?: 'Running'|'Stopped'|null,
     *     Sort?: Shapes\SortObject|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
